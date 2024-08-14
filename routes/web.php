<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fronted\MasterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

route::controller(MasterController::class)->group(function(){
    route::get('/','index')->name('home');
   
   
    route::get('/service','service')->name('page.service');
  
    route::get('/bitrix24-partner','bitrix24')->name('partner.bitrix24');
    route::get('/respond-partner','respond')->name('partner.respond');

    // Help Center navogation 
    route::get('/faq','faq')->name('help_center.faq');
    route::get('/about','about_us')->name('help_center.about');
    route::get('/support','support')->name('help_center.support');
    route::get('/contact','contacts')->name('help_center.contact');

    //industries
    route::get('/education','education')->name('industries.educatione');
    route::get('/ecommerce','ecommerce')->name('industries.ecommerces');
    route::get('/retail','retail')->name('industries.retailes');
    route::get('/hospitality','hospitality')->name('industries.hospital');
    route::get('/automotive','automotive')->name('industries.automotives');
    route::get('/healthcare','healthcare')->name('industries.healthcares');
    route::get('/recruitment','recruitment')->name('industries.recruitmente');
    route::get('/itsaas','itsaas')->name('industries.it&saas');
    route::get('/other','other')->name('industries.others');

    //service
    route::get('/software_consultant','software_consultant')->name('service.software_consultantes');
    
});

Route::fallback(function () {
    return response()->view('main-pages.error404', [], 404);
});