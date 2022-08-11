<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home', [
            'locale' => app()->getLocale(),
            'featured_services' => Service::where('status', 'active')->where('is_featured', '1')->orderBy('id', 'DESC')->take(3)->get(),
            'services' => Service::where('status', 'active')->where('is_featured', '0')->orderBy('id', 'DESC')->limit(5)->get(),
        ]);
    }
    public function services()
    {
        return view('website.services', [
            'locale' => app()->getLocale(),
            'featured_services' => Service::where('status', 'active')->where('is_featured', '1')->orderBy('id', 'DESC')->take(4)->get(),
            'services' => Service::where('status', 'active')->where('is_featured', '0')->orderBy('id', 'DESC')->get(),
        ]);
    }
    public function serviceDetails(Service $service)
    {
        return view('website.service-details', [
            'service' => $service,
        ]);
    }
}
