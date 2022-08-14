<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\project;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home', [
            'locale' => app()->getLocale(),
            'services' => Service::where('status', 'active')->where('is_featured', '1')->orderBy('id', 'DESC')->limit(5)->get(),
            'projects' => project::where('status', 'active')->where('is_featured', '1')->orderBy('id', 'DESC')->limit(5)->get(),
            'about' => About::find(1),
        ]);
    }
    public function services()
    {
        return view('website.services', [
            'locale' => app()->getLocale(),
            // 'featured_services' => Service::where('status', 'active')->where('is_featured', '1')->orderBy('id', 'DESC')->take(4)->get(),
            'services' => Service::where('status', 'active')->orderBy('id', 'DESC')->get(),
        ]);
    }
    public function serviceDetails(Service $service)
    {
        return view('website.service-details', [
            'locale' => app()->getLocale(),
            'services' => Service::where('status', 'active')->where('is_featured', '1')->orderBy('id', 'DESC')->get(),
            'service' => $service,
        ]);
    }
    public function projects()
    {
        $services = Service::where('status', 'active')->has('projects')->orderBy('id', 'DESC')->get();
        $services_classes = '';
        foreach ($services->pluck('name') as $service_name) {
            $services_classes .= ' ' . Str::slug($service_name);
        }
        return view('website.projects', [
            'services' => $services,
            'services_classes' => $services_classes,
            'locale' => app()->getLocale(),
            'projects' => Project::where('status', 'active')->orderBy('id', 'DESC')->get(),
        ]);
    }
    public function projectDetails(project $project)
    {
        return view('website.project-details', [
            'locale' => app()->getLocale(),
            'project' => $project,
        ]);
    }
    public function about()
    {
        return view('website.about', [
            'locale' => app()->getLocale(),
            'about' => About::find(1),
        ]);
    }
    public function products()
    {
        // $services = Service::where('status', 'active')->has('products')->orderBy('id', 'DESC')->get();
        // $services_classes = '';
        // foreach ($services->pluck('name') as $service_name) {
        //     $services_classes .= ' ' . Str::slug($service_name);
        // }
        return view('website.products', [
            // 'services' => $services,
            // 'services_classes' => $services_classes,
            'locale' => app()->getLocale(),
            // 'products' => Project::where('status', 'active')->orderBy('id', 'DESC')->get(),
        ]);
    }
}
