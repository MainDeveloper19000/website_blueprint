<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {
        return view('main-pages.index');
    }

    // Product

    public function bitrix24()
    {
        return view('product-pages.bitrix24');
    }

    public function respond()
    {
        return view('product-pages.respond');
    }

    // ===============================

    // service
    public function service()
    {
        return view('main-pages.service');
    }

    // ===============================

    // Help Center

    public function faq()
    {
        return view('main-pages.faq');
    }

    public function about_us()
    {
        return view('main-pages.about');
    }

    public function contacts()
    {
        return view('helps.contact');
    }
    public function support()
    {
        return view('helps.support');
    }
    public function error404()
    {
        return view('main-pages.error404');
    }
    // ===============================
    //industries
    public function education()
    {
        return view('industries.educatione');
    }
    public function ecommerce()
    {
        return view('industries.ecommerces');
    }
    public function retail()
    {
        return view('industries.retailes');
    }
    public function hospitality()
    {
        return view('industries.hospital');
    }
    public function automotive()
    {
        return view('industries.automatives');
    }
    public function healthcare()
    {
        return view('industries.healthcares');
    }
    public function recruitment()
    {
        return view('industries.recruitmente');
    }
    public function itsaas()
    {
        return view('industries.it&saas');
    }
    public function other()
    {
        return view('industries.others');
    }

    //service
    // ===============================

    public function software_consultant()
    {
        return view('service.software_consultantes');
    }
    public function service_center()
    {
        return view('service.service_centers');
    }
    public function it_maintanance()
    {
        return view('service.it_maintanances');
    }
    public function crm_training()
    {
        return view('service.crm_train');
    }
    public function onboarding_program()
    {
        return view('service.onboarding_programe');
    }
    public function other_service()
    {
        return view('service.other_servic');
    }



    //partner
    // ===============================
    public function bitrix24_partner()
    {
        return view('partnerships.bitrix24');
    }
    public function respond_partner()
    {
        return view('partnerships.respond');
    }

    // respond.io

    public function respond_feature(){
        return view('main-pages.respond_feature');
    }
}