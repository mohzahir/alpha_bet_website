<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.service.index', [
            'services' => Service::orderBy('id', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddServiceRequest $request)
    {
        // dd($request->all());
        $photo = $request->file('photo')->store('files', 'public_folder');
        Service::create([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'descr' => $request->descr,
            'descr_ar' => $request->descr_ar,
            'short_descr' => $request->short_descr,
            'short_descr_ar' => $request->short_descr_ar,
            'is_featured' => $request->is_featured ?? 0,
            'photo' => $photo,
        ]);
        return redirect()->route('service.index')->with('success', 'تمت اضافة الخدمة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('admin.service.show', [
            'service' => $service
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit', [
            'service' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(AddServiceRequest $request, Service $service)
    {
        $photo = $service->photo;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('files', 'public_folder');
        }
        $service->update([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'descr' => $request->descr,
            'descr_ar' => $request->descr_ar,
            'short_descr' => $request->short_descr,
            'short_descr_ar' => $request->short_descr_ar,
            'is_featured' => $request->is_featured ?? 0,
            'photo' => $photo,
        ]);
        return redirect()->route('service.index')->with('success', 'تم تعديل الخدمة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if (count($service->projects) > 0) {
            return redirect()->route('service.index')->with('warning', 'هذه الخدمة لديها مشاريع تابعة لها ولا يمكن حذفها');
        }
        $service->delete();
        return redirect()->route('service.index')->with('success', 'تم حذف الخدمة بنجاح');
    }

    public function changeStatus(Request $request, Service $service)
    {
        $service->update([
            'status' => $request->status
        ]);
        return redirect()->route('service.index')->with('success', 'تم تغيير الحالة بنجاح');
    }
}
