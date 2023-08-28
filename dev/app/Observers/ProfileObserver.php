<?php

namespace App\Observers;

use App\Profile;

class ProfileObserver
{
    public function saving(Profile $profile)
    {
        $combined = $profile->page . ' ' . $profile->name . ' ' . $profile->title;
        $profile->slug = str_slug($combined);
    }

    public function creating(Profile $profile)
    {
        $combined = $profile->page . ' ' . $profile->name . ' ' . $profile->title;
        $profile->slug = str_slug($combined);
    }
}