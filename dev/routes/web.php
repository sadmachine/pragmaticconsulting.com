<?php

/*------------------------------------*\
  # Use Statements 
\*------------------------------------*/

use Illuminate\Support\Facades\Route;
use App\Struct\Link;

define('EXTENSION_REGEX', '(' . env('ROUTE_EXT') . ')?');

/*------------------------------------*\
  # Simple 'view' Routes
\*------------------------------------*/

Route::prefix(env('APP_PREFIX', ''))->group(function() {

    /*------------------------------------*\
    # Helpful Redirects
    \*------------------------------------*/

    /**
     * Handle any legacy links which contain the ".php" suffix
     * 
     * This is done by rerouting "/page.php" to "/page"
     */
    Route::get('{pagename}.php', function ($pagename) {
        return redirect(route($pagename, ''));
    })->where('pagename', '[A-Za-z0-9-]+');


    /**
     * Force an empty url ending to redirect to '/home'
     */
    Route::get('', function () {
        return redirect(route('home'));
    });


    Route::any(env('HOME_ROUTE', '/home{ext}'), 'Com\GetController@home')
        ->where('ext', EXTENSION_REGEX)
        ->name('home');
    // About
    Route::any('/overview{ext}', 'Com\GetController@overview')
        ->where('ext', EXTENSION_REGEX)
        ->name('overview');
    Route::any('/location{ext}', 'Com\GetController@location')
        ->where('ext', EXTENSION_REGEX)
        ->name('location');

    // Leadership
    Route::any('/officers{ext}', 'Com\GetController@officers')
        ->where('ext', EXTENSION_REGEX)
        ->name('officers');
    Route::any('/board-of-advisors{ext}', 'Com\GetController@boardOfAdvisors')
        ->where('ext', EXTENSION_REGEX)
        ->name('board-of-advisors');
    Route::any('/meet-our-team{ext}', 'Com\GetController@meetOurTeam')
        ->where('ext', EXTENSION_REGEX)
        ->name('meet-our-team');

    // Services
    Route::any('/engineering-consulting{ext}', 'Com\GetController@engineeringConsulting')
		->where('ext', EXTENSION_REGEX)
        ->name('engineering-consulting');
    Route::any('/human-capital{ext}', 'Com\GetController@humanCapital')
		->where('ext', EXTENSION_REGEX)
        ->name('human-capital');
    Route::any('/interim-executive{ext}', 'Com\GetController@interimExecutive')
		->where('ext', EXTENSION_REGEX)
        ->name('interim-executive');
    Route::any('/ceo-coo{ext}', 'Com\GetController@ceoCoo')
		->where('ext', EXTENSION_REGEX)
        ->name('ceo-coo');
    Route::any('/chro{ext}', 'Com\GetController@chro')
		->where('ext', EXTENSION_REGEX)
        ->name('chro');
    Route::any('/cfo{ext}', 'Com\GetController@cfo')
		->where('ext', EXTENSION_REGEX)
        ->name('cfo');
    Route::any('/cio-cto{ext}', 'Com\GetController@cioCto')
		->where('ext', EXTENSION_REGEX)
        ->name('cio-cto');
    Route::any('/it-and-systems{ext}', 'Com\GetController@itAndSystems')
		->where('ext', EXTENSION_REGEX)
        ->name('it-and-systems');
    Route::any('/lean-six-sigma{ext}', 'Com\GetController@leanSixSigma')
		->where('ext', EXTENSION_REGEX)
        ->name('lean-six-sigma');
    Route::any('/project-management{ext}', 'Com\GetController@projectManagement')
		->where('ext', EXTENSION_REGEX)
        ->name('project-management');
    Route::any('/quality-systems{ext}', 'Com\GetController@qualitySystems')
		->where('ext', EXTENSION_REGEX)
        ->name('quality-systems');
    Route::any('/sales-and-marketing{ext}', 'Com\GetController@salesAndMarketing')
		->where('ext', EXTENSION_REGEX)
        ->name('sales-and-marketing');
    Route::any('/security{ext}', 'Com\GetController@security')
		->where('ext', EXTENSION_REGEX)
        ->name('security');
    Route::any('/supply-chain{ext}', 'Com\GetController@supplyChain')
		->where('ext', EXTENSION_REGEX)
        ->name('supply-chain');
    Route::any('/import-export{ext}', 'Com\GetController@importExport')
		->where('ext', EXTENSION_REGEX)
        ->name('import-export');
    Route::any('/compliance{ext}', 'Com\GetController@compliance')
		->where('ext', EXTENSION_REGEX)
        ->name('compliance');
    Route::any('/global-supply-chain{ext}', 'Com\GetController@globalSupplyChain')
		->where('ext', EXTENSION_REGEX)
        ->name('global-supply-chain');

    // Portfolio
    Route::any('/industries{ext}', 'Com\GetController@industries')
		->where('ext', EXTENSION_REGEX)
        ->name('industries');
    Route::any('/our-clients{ext}', 'Com\GetController@ourClients')
		->where('ext', EXTENSION_REGEX)
        ->name('our-clients');

    // Pages accessible from 'IT & Systems'
    Route::any('/jdedwards{ext}', 'Com\GetController@jdedwards')
		->where('ext', EXTENSION_REGEX)
        ->name('jdedwards');
    Route::any('/sap{ext}', 'Com\GetController@sap')
		->where('ext', EXTENSION_REGEX)
        ->name('sap');
    Route::any('/syspro{ext}', 'Com\GetController@syspro')
		->where('ext', EXTENSION_REGEX)
        ->name('syspro');
    Route::any('/epicor{ext}', 'Com\GetController@epicor')
		->where('ext', EXTENSION_REGEX)
        ->name('epicor');
    Route::any('/dynamics{ext}', 'Com\GetController@dynamics')
		->where('ext', EXTENSION_REGEX)
        ->name('dynamics');
    Route::any('/infor{ext}', 'Com\GetController@infor')
		->where('ext', EXTENSION_REGEX)
        ->name('infor');
    Route::any('/globalshop{ext}', 'Com\GetController@globalshop')
		->where('ext', EXTENSION_REGEX)
        ->name('globalshop');
    Route::any('/iqms{ext}', 'Com\GetController@iqms')
		->where('ext', EXTENSION_REGEX)
        ->name('iqms');
    Route::any('/traverse{ext}', 'Com\GetController@traverse')
		->where('ext', EXTENSION_REGEX)
        ->name('traverse');
    Route::any('/e2', 'Com\GetController@e2')
		->where('ext', EXTENSION_REGEX)
        ->name('e2');
    Route::any('/fishbowl{ext}', 'Com\GetController@fishbowl')
		->where('ext', EXTENSION_REGEX)
        ->name('fishbowl');

    // Other pages
    Route::any('/supply-chain-examples{ext}', 'Com\GetController@supplyChainExamples')
		->where('ext', EXTENSION_REGEX)
        ->name('supply-chain-examples');
    Route::any('/{iso}9000{ext}', 'Com\GetController@iso9000')
		->where('iso', "(iso|ISO)")
		->where('ext', EXTENSION_REGEX)
        ->name('iso9000');
    Route::any('/problem-solving{ext}', 'Com\GetController@problemSolving')
		->where('ext', EXTENSION_REGEX)
        ->name('problem-solving');
    Route::any('/privacy-policy{ext}', 'Com\GetController@privacyPolicy')
		->where('ext', EXTENSION_REGEX)
        ->name('privacy-policy');


    /*------------------------------------*\
    # Static Controller Routes
    \*------------------------------------*/

    Route::get('contact{ext}', 'Com\ContactController@display')
        ->where('ext', EXTENSION_REGEX)
        ->name('contact');
    Route::post('contact{ext}', 'Com\ContactController@submit')
        ->where('ext', EXTENSION_REGEX);
    Route::get('news-and-events{ext}', 'Com\GetController@newsAndEvents')
        ->where('ext', EXTENSION_REGEX)
        ->name('news-and-events');


    /*------------------------------------*\
    # Dynamic Controller Routes
    \*------------------------------------*/

    Route::get('articles/{article_slug}', 'Com\GetController@articles')
		->where('article_slug', '[A-Za-z0-9-]+');





    /*------------------------------------*\
    # Auth Routes
    \*------------------------------------*/
    Auth::routes();

    Route::get('admin', 'DashboardController@index')
        ->name('admin');
});