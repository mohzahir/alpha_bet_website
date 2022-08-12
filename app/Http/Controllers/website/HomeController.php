<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\project;
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
            'locale' => app()->getLocale(),
            'services' => Service::where('status', 'active')->where('is_featured', '0')->orderBy('id', 'DESC')->get(),
            'service' => $service,
        ]);
    }
    public function projects()
    {
        return view('website.projects', [
            'locale' => app()->getLocale(),
            'projects' => Service::where('status', 'active')->where('is_featured', '0')->orderBy('id', 'DESC')->get(),
        ]);
    }
    public function projectDetails(project $project)
    {
        return view('website.project-details', [
            'locale' => app()->getLocale(),
            'project' => $project,
        ]);
    }
}
