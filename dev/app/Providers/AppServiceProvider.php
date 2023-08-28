<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\{Profile, Carousel, CarouselItem, Client, Article};
use App\Observers\ProfileObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Profile::observe(ProfileObserver::class);
        Carousel::observe(CarouselObserver::class);
        CarouselItem::observe(CarouselItemObserver::class);
        Client::observe(ClientObserver::class);
        Article::observe(ArticleObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}