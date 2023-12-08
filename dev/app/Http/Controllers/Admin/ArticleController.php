<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Etc\Alerts;
use App\Article;
use App;


class ArticleController extends Controller
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
        } elseif ($request->has('update')) {
            $this->update($context, $request);
        } elseif ($request->has('create')) {
            $this->create($context, $request);
        } elseif ($request->has('delete')) {
            $this->delete($context, $request);
        }

        return $this->render($context);
    }

    public function render($context = [])
    {
        $context['articles'] = [];
        $context['articles']['news'] = Article::allNews();
        $context['articles']['events'] = Article::allEvents();

        return view('shares.pages.admin.articles', $context);
    }

    /*------------------------------------*\
      # Article Post Actions 
    \*------------------------------------*/

    public function lookup(array &$context, Request $request)
    {
        $id = $request->input('id');
        try {
            // TODO: Change 'articleUpdateLookup' to just 'id'
            $displayArticle = Article::findOrFail($id);
            $context['display'] = [
                'article' => $displayArticle,
                'article_delta' => $displayArticle->content_delta
            ];
        } catch (\Exception $e) {
            $context['alert'] = new Alerts\DangerAlert('Could not find article with id "' . $id . '"');
        }
    }

    public function create(array &$context, Request $request)
    {
        $title          = $request->input('title');
        $type           = $request->input('type');
        $location       = $request->input('location');
        $content        = $request->input('content');
        $content_delta  = $request->input('content_delta');
        try {
            DB::beginTransaction();
            $article = Article::create([
                'title'          => $title,
                'type'           => $type,
                'slug'           => $location,
                'content'        => ($content == '' ? null : $content),
                'content_delta'  => $content_delta
            ]);
            DB::commit();
            $context['alert'] = new Alerts\SuccessAlert('Article successfully added! (Title: ' . $article->title . ')');
        } catch (\Exception $e) {
            DB::rollback();
            $context['alert'] = new Alerts\DangerAlert('Article could not be added. Please check to make sure that the article title is not already in use (article titles must be unique).');
        }
    }

    public function update(array &$context, Request $request)
    {
        $id             = $request->input('articleId');
        $title          = $request->input('title');
        $type           = $request->input('type');
        $slug           = $request->input('location');
        $content        = $request->input('content');
        $content_delta  = $request->input('content_delta');
        try {
            DB::beginTransaction();
            $article = Article::find($id);
            $article->update([
                'title'          => $title,
                'type'           => $type,
                'slug'           => $slug,
                'content'        => ($content == '' ? null : $content),
                'content_delta'  => $content_delta
            ]);
            DB::commit();
            $context['alert'] = new Alerts\SuccessAlert('Article successfully updated! (Title: ' . $article->title . ')');
        } catch (\Exception $e) {
            DB::rollback();
            $context['alert'] = new Alerts\DangerAlert(
                'Article could not be updated. Please check to make sure that the article title is not already in use (article titles must be unique). ' . $e->getMessage()
            );
        }
    }

    public function delete(array &$context, Request $request)
    {
        // TODO: Change 'articleDeleteLookup' to just 'id'
        $id = $request->input('id');
        try {
            DB::beginTransaction();
            $article = Article::find($id);
            $article->delete();
            DB::commit();
            $context['alert'] = new Alerts\SuccessAlert('Article deleted successfully! (Title: ' . $article->title . ')');
        } catch (\Exception $e) {
            DB::rollback();
            $context['alert'] = new Alerts\DangerAlert('Article could not be deleted.');
        }
    }
}
