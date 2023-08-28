<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Etc\Alerts;
use App;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get()
    {
        return $this->render();
    }

    public function post(Request $request)
    {
        $context = [];

        if ($request->has('lookup') && $request->has('id')) {
            $this->lookup($context, $request);
        } elseif ($request->has('create') && $request->has('name') && $request->hasFile('image')) {
            $this->create($context, $request);
        } elseif ($request->has('update') && $request->has('id')) {
            $this->update($context, $request);
        } elseif ($request->has('delete') && $request->has('id')) {
            $this->delete($context, $request);
        }

        return $this->render($context);
    }

    public function render($context = [])
    {
        try {
            $clients = App\Client::orderBy('name', 'asc')->get();
        } catch (\Exception $e) {
            $context['alert'] = new Alerts\DangerAlert($e->getMessage());
        }

        $context['clients'] = $clients;
        return view('pages.admin.clients', $context);
    }


    /*------------------------------------*\
      # Client POST Actions 
    \*------------------------------------*/

    public function lookup(array &$context, Request $request)
    {
        $id = $request->input('id');
        try {
            $displayClient = App\Client::find($id);
            $context['display'] = ['client' => $displayClient];
        } catch (\Exception $e) {
            $context['alert'] = new Alerts\DangerAlert($e->getMessage());
        }
    }

    public function create(array &$context, Request $request)
    {
        $name = $request->input('name');
        $image_file = $request->file('image');
        try {
            DB::beginTransaction();
            static::newClient($name, $image_file);
            DB::commit();
            $context['alert'] = new Alerts\SuccessAlert('Successfully added new client!');
        } catch (\Exception $e) {
            DB::rollback();
            $context['alert'] = new Alerts\DangerAlert($e->getMessage());
        }
    }

    public function update(array &$context, Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name', null);
        $image_file = $request->file('image', null);
        try {
            DB::beginTransaction();
            static::updateClient($id, $name, $image_file);
            DB::commit();
            $context['alert'] = new Alerts\SuccessAlert('Successfully updated client!');
        } catch (\Exception $e) {
            DB::rollback();
            $context['alert'] = new Alerts\DangerAlert($e->getMessage());
        }
    }

    public function delete(array &$context, Request $request)
    {
        $id = $request->input('id');
        try {
            DB::beginTransaction();
            static::deleteClient($id);
            DB::commit();
            $context['alert'] = new Alerts\SuccessAlert('Client deleted successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            $context['alert'] = new Alerts\DangerAlert('Client could not be deleted.');
        }
    }


    /*------------------------------------*\
      # Client Manager Methods
    \*------------------------------------*/

    public static function deleteClient($id)
    {
        $client = App\Client::findOrFail($id);
        Storage::disk('uploads')->delete('clients/' . $client->img_name);
        $client->delete();
        return $client;
    }

    public static function updateClient($id, $name = null, $image_upload = null)
    {
        // Handle image form data
        $client = App\Client::findOrFail($id);
        $client->name = $name;

        if ($image_upload != null && $image_upload->isValid()) {
            Storage::disk('uploads')->delete('clients/' . $client->img_name);
            $path = $image_upload->store('clients', 'uploads');
            $path_end = substr($path, strrpos($path, '/') + 1);
            $client->img_name = $path_end;
        }

        $client->save();
    }

    public static function newClient($name, $image_upload)
    {
        // Handle image form data
        if ($image_upload != null && $image_upload->isValid()) {
            $path = $image_upload->store('clients', 'uploads');
            $path_end = substr($path, strrpos($path, '/') + 1);
        }

        $client = new App\Client();
        $client->name = $name;
        $client->img_name = $path_end;
        $client->save();
    }
}