<?php

/*------------------------------------*\
  # Use Statements 
\*------------------------------------*/

use Illuminate\Support\Facades\Route;
use App\Struct\Link;


/*------------------------------------*\
  # Simple 'view' Routes
\*------------------------------------*/

Route::any('/home', 'Com\GetController@home');
// About
Route::any('/overview', 'Com\GetController@overview');
Route::any('/location', 'Com\GetController@location');

// Leadership
Route::any('/officers', 'Com\GetController@officers');
Route::any('/board-of-advisors', 'Com\GetController@boardOfAdvisors');
Route::any('/meet-our-team', 'Com\GetController@meetOurTeam');

// Services
Route::any('/engineering-consulting', 'Com\GetController@engineeringConsulting');
Route::any('/human-capital', 'Com\GetController@humanCapital');
Route::any('/interim-executive', 'Com\GetController@interimExecutive');
Route::any('/ceo-coo', 'Com\GetController@ceoCoo');
Route::any('/chro', 'Com\GetController@chro');
Route::any('/cfo', 'Com\GetController@cfo');
Route::any('/cio-cto', 'Com\GetController@cioCto');
Route::any('/it-and-systems', 'Com\GetController@itAndSystems');
Route::any('/lean-six-sigma', 'Com\GetController@leanSixSigma');
Route::any('/project-management', 'Com\GetController@projectManagement');
Route::any('/quality-systems', 'Com\GetController@qualitySystems');
Route::any('/sales-and-marketing', 'Com\GetController@salesAndMarketing');
Route::any('/security', 'Com\GetController@security');
Route::any('/supply-chain', 'Com\GetController@supplyChain');
Route::any('/import-export', 'Com\GetController@importExport');
Route::any('/compliance', 'Com\GetController@compliance');
Route::any('/global-supply-chain', 'Com\GetController@globalSupplyChain');

// Portfolio
Route::any('/industries', 'Com\GetController@industries');
Route::any('/our-clients', 'Com\GetController@ourClients');

// Pages accessible from 'IT & Systems'
Route::any('/jdedwards', 'Com\GetController@jdedwards');
Route::any('/sap', 'Com\GetController@sap');
Route::any('/syspro', 'Com\GetController@syspro');
Route::any('/epicor', 'Com\GetController@epicor');
Route::any('/dynamics', 'Com\GetController@dynamics');
Route::any('/infor', 'Com\GetController@infor');
Route::any('/globalshop', 'Com\GetController@globalshop');
Route::any('/iqms', 'Com\GetController@iqms');
Route::any('/traverse', 'Com\GetController@traverse');
Route::any('/e2', 'Com\GetController@e2');
Route::any('/fishbowl', 'Com\GetController@fishbowl');

// Other pages
Route::any('/supply-chain-examples', 'Com\GetController@supplyChainExamples');
Route::any('/{iso}9000', 'Com\GetController@iso9000')->where('iso', "(iso|ISO)");
Route::any('/problem-solving', 'Com\GetController@problemSolving');
Route::any('/privacy-policy', 'Com\GetController@privacyPolicy');


/*------------------------------------*\
  # Static Controller Routes
\*------------------------------------*/

Route::get('/contact', 'Com\ContactController@display');
Route::post('/contact', 'Com\ContactController@submit');
Route::get('/news-and-events', 'Com\GetController@newsAndEvents');


/*------------------------------------*\
  # Dynamic Controller Routes
\*------------------------------------*/

Route::get('/articles/{article_slug}', 'Com\GetController@articles')->where('article_slug', '[A-Za-z0-9-]+');





/*------------------------------------*\
  # Helpful Redirects
\*------------------------------------*/

/**
 * Handle any legacy links which contain the ".php" suffix
 * 
 * This is done by rerouting "/page.php" to "/page"
 */
Route::get('/{pagename}.php', function ($pagename) {
  return redirect('/' . $pagename);
})->where('pagename', '[A-Za-z0-9-]+');


/**
 * Force an empty url ending to redirect to '/home'
 */
Route::get('/', function () {
  return redirect('/home');
});

/*------------------------------------*\
  # Auth Routes
\*------------------------------------*/
Auth::routes();

Route::get('/admin', 'DashboardController@index');
