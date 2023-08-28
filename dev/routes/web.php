<?php

/*------------------------------------*\
  # Use Statements 
\*------------------------------------*/

use Illuminate\Support\Facades\Route;
use App\Struct\Link;


/*------------------------------------*\
  # Simple 'view' Routes
\*------------------------------------*/

Route::prefix(env('APP_PREFIX', ''))->group(function() {
    Route::any(env('HOME_ROUTE', '/home') . '{ext}', 'Com\GetController@home')
        ->where('ext', '(.php)?')
        ->name('home');
    // About
    Route::any('/overview{ext}', 'Com\GetController@overview')
        ->where('ext', '(.php)?')
        ->name('overview');
    Route::any('/location{ext}', 'Com\GetController@location')
        ->where('ext', '(.php)?')
        ->name('location');

    // Leadership
    Route::any('/officers{ext}', 'Com\GetController@officers')
        ->where('ext', '(.php)?')
        ->name('officers');
    Route::any('/board-of-advisors{ext}', 'Com\GetController@boardOfAdvisors')
        ->where('ext', '(.php)?')
        ->name('board-of-advisors');
    Route::any('/meet-our-team{ext}', 'Com\GetController@meetOurTeam')
        ->where('ext', '(.php)?')
        ->name('meet-our-team');

    // Services
    Route::any('/engineering-consulting{ext}', 'Com\GetController@engineeringConsulting')
		->where('ext', '(.php)?')
        ->name('engineering-consulting');
    Route::any('/human-capital{ext}', 'Com\GetController@humanCapital')
		->where('ext', '(.php)?')
        ->name('human-capital');
    Route::any('/interim-executive{ext}', 'Com\GetController@interimExecutive')
		->where('ext', '(.php)?')
        ->name('interim-executive');
    Route::any('/ceo-coo{ext}', 'Com\GetController@ceoCoo')
		->where('ext', '(.php)?')
        ->name('ceo-coo');
    Route::any('/chro{ext}', 'Com\GetController@chro')
		->where('ext', '(.php)?')
        ->name('chro');
    Route::any('/cfo{ext}', 'Com\GetController@cfo')
		->where('ext', '(.php)?')
        ->name('cfo');
    Route::any('/cio-cto{ext}', 'Com\GetController@cioCto')
		->where('ext', '(.php)?')
        ->name('cio-cto');
    Route::any('/it-and-systems{ext}', 'Com\GetController@itAndSystems')
		->where('ext', '(.php)?')
        ->name('it-and-systems');
    Route::any('/lean-six-sigma{ext}', 'Com\GetController@leanSixSigma')
		->where('ext', '(.php)?')
        ->name('lean-six-sigma');
    Route::any('/project-management{ext}', 'Com\GetController@projectManagement')
		->where('ext', '(.php)?')
        ->name('project-management');
    Route::any('/quality-systems{ext}', 'Com\GetController@qualitySystems')
		->where('ext', '(.php)?')
        ->name('quality-systems');
    Route::any('/sales-and-marketing{ext}', 'Com\GetController@salesAndMarketing')
		->where('ext', '(.php)?')
        ->name('sales-and-marketing');
    Route::any('/security{ext}', 'Com\GetController@security')
		->where('ext', '(.php)?')
        ->name('security');
    Route::any('/supply-chain{ext}', 'Com\GetController@supplyChain')
		->where('ext', '(.php)?')
        ->name('supply-chain');
    Route::any('/import-export{ext}', 'Com\GetController@importExport')
		->where('ext', '(.php)?')
        ->name('import-export');
    Route::any('/compliance{ext}', 'Com\GetController@compliance')
		->where('ext', '(.php)?')
        ->name('compliance');
    Route::any('/global-supply-chain{ext}', 'Com\GetController@globalSupplyChain')
		->where('ext', '(.php)?')
        ->name('global-supply-chain');

    // Portfolio
    Route::any('/industries{ext}', 'Com\GetController@industries')
		->where('ext', '(.php)?')
        ->name('industries');
    Route::any('/our-clients{ext}', 'Com\GetController@ourClients')
		->where('ext', '(.php)?')
        ->name('our-clients');

    // Pages accessible from 'IT & Systems'
    Route::any('/jdedwards{ext}', 'Com\GetController@jdedwards')
		->where('ext', '(.php)?')
        ->name('jdedwards');
    Route::any('/sap{ext}', 'Com\GetController@sap')
		->where('ext', '(.php)?')
        ->name('sap');
    Route::any('/syspro{ext}', 'Com\GetController@syspro')
		->where('ext', '(.php)?')
        ->name('syspro');
    Route::any('/epicor{ext}', 'Com\GetController@epicor')
		->where('ext', '(.php)?')
        ->name('epicor');
    Route::any('/dynamics{ext}', 'Com\GetController@dynamics')
		->where('ext', '(.php)?')
        ->name('dynamics');
    Route::any('/infor{ext}', 'Com\GetController@infor')
		->where('ext', '(.php)?')
        ->name('infor');
    Route::any('/globalshop{ext}', 'Com\GetController@globalshop')
		->where('ext', '(.php)?')
        ->name('globalshop');
    Route::any('/iqms{ext}', 'Com\GetController@iqms')
		->where('ext', '(.php)?')
        ->name('iqms');
    Route::any('/traverse{ext}', 'Com\GetController@traverse')
		->where('ext', '(.php)?')
        ->name('traverse');
    Route::any('/e2', 'Com\GetController@e2')
		->where('ext', '(.php)?')
        ->name('e2');
    Route::any('/fishbowl{ext}', 'Com\GetController@fishbowl')
		->where('ext', '(.php)?')
        ->name('fishbowl');

    // Other pages
    Route::any('/supply-chain-examples{ext}', 'Com\GetController@supplyChainExamples')
		->where('ext', '(.php)?')
        ->name('supply-chain-examples');
    Route::any('/{iso}9000{ext}', 'Com\GetController@iso9000')
		->where('iso', "(iso|ISO)")
		->where('ext', '(.php)?')
        ->name('iso9000');
    Route::any('/problem-solving{ext}', 'Com\GetController@problemSolving')
		->where('ext', '(.php)?')
        ->name('problem-solving');
    Route::any('/privacy-policy{ext}', 'Com\GetController@privacyPolicy')
		->where('ext', '(.php)?')
        ->name('privacy-policy');


    /*------------------------------------*\
    # Static Controller Routes
    \*------------------------------------*/

    Route::get('contact{ext}', 'Com\ContactController@display')
        ->where('ext', '(.php)?')
        ->name('contact-get');
    Route::post('contact{ext}', 'Com\ContactController@submit')
        ->where('ext', '(.php)?')
        ->name('contact-post');
    Route::get('news-and-events{ext}', 'Com\GetController@newsAndEvents')
        ->where('ext', '(.php)?')
        ->name('news-and-events');


    /*------------------------------------*\
    # Dynamic Controller Routes
    \*------------------------------------*/

    Route::get('articles/{article_slug}', 'Com\GetController@articles')
		->where('article_slug', '[A-Za-z0-9-]+');




    /*------------------------------------*\
    # Helpful Redirects
    \*------------------------------------*/

    /**
     * Handle any legacy links which contain the ".php" suffix
     * 
     * This is done by rerouting "/page.php" to "/page"
     */
    Route::get('{pagename}.php', function ($pagename) {
        return redirect('/' . $pagename);
    })->where('pagename', '[A-Za-z0-9-]+');


    /**
     * Force an empty url ending to redirect to '/home'
     */
    Route::get('', function () {
        return redirect(route('home'));
    });

    /*------------------------------------*\
    # Auth Routes
    \*------------------------------------*/
    Auth::routes();

    Route::get('admin', 'DashboardController@index')
        ->name('admin');
});