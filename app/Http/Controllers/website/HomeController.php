<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\About;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Product;
use App\Models\project;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home', [
            'locale' => app()->getLocale(),
            'services' => Service::where('status', 'active')->where('is_featured', '1')->orderBy('id', 'DESC')->limit(5)->get(),
            'projects' => project::where('status', 'active')->where('is_featured', '1')->orderBy('id', 'DESC')->limit(5)->get(),
            'products' => Product::where('status', 'active')->where('is_featured', '1')->orderBy('id', 'DESC')->limit(3)->get(),
            'about' => About::find(1),
            'clients' => Client::where('is_featured', 1)->get(),
            'employees' => Employee::where('status', 'active')->get(),
            'setting' => Setting::find(1),
        ]);
    }
    public function services()
    {
        return view('website.services', [
            'locale' => app()->getLocale(),
            // 'featured_services' => Service::where('status', 'active')->where('is_featured', '1')->orderBy('id', 'DESC')->take(4)->get(),
            'services' => Service::where('status', 'active')->orderBy('id', 'DESC')->get(),
            'setting' => Setting::find(1),
        ]);
    }
    public function serviceDetails(Service $service)
    {
        return view('website.service-details', [
            'locale' => app()->getLocale(),
            'services' => Service::where('status', 'active')->where('is_featured', '1')->orderBy('id', 'DESC')->get(),
            'service' => $service,
            'setting' => Setting::find(1),
        ]);
    }
    public function projects()
    {
        $services = Service::where('status', 'active')->has('projects')->orderBy('id', 'DESC')->get();
        $services_ids = [];
        foreach ($services->pluck('id') as $service_id) {
            array_push($services_ids, $service_id);
        }
        return view('website.projects', [
            'services' => $services,
            'services_ids' => $services_ids,
            'locale' => app()->getLocale(),
            'projects' => Project::where('status', 'active')->orderBy('id', 'DESC')->get(),
            'setting' => Setting::find(1),
        ]);
    }
    public function projectDetails(project $project)
    {
        return view('website.project-details', [
            'locale' => app()->getLocale(),
            'project' => $project,
            'setting' => Setting::find(1),
        ]);
    }
    public function about()
    {
        return view('website.about', [
            'locale' => app()->getLocale(),
            'about' => About::find(1),
            'clients' => Client::where('is_featured', 1)->get(),
            'employees' => Employee::where('status', 'active')->get(),
            'setting' => Setting::find(1),
        ]);
    }
    public function products()
    {
        return view('website.products', [
            'locale' => app()->getLocale(),
            'products' => Product::where('status', 'active')->orderBy('id', 'DESC')->get(),
            'setting' => Setting::find(1),
        ]);
    }
    public function contact()
    {
        return view('website.contact', [
            'locale' => app()->getLocale(),
            'setting' => Setting::find(1),
        ]);
    }
    public function SubmitContact(Request $request)
    {
        // dd($request->all());
        Mail::to(Setting::find(1)->email)->send(new ContactMail($request->name, $request->email, $request->message));

        if (Mail::failures()) {
            return response()->Fail('عفوا, لم يتم ارسال رسالتك الرجاء المحاولة لاحقا');
        } else {
            return response()->success('تم إرسال الرسالة بنجاح');
        }
    }
}
