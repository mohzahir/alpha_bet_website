<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddSettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.setting.index', [
            'setting' => Setting::findOrFail(1),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddSettingRequest $request)
    {
        // dd($request->all());
        $setting = Setting::find(1);
        $logo = $setting->logo;
        $logo_black = $setting->logo_black;
        if ($request->hasFile('logo')) {
            $logo = $request->logo->store('files', 'public_folder');
        }
        if ($request->hasFile('logo_black')) {
            $logo_black = $request->logo_black->store('files', 'public_folder');
        }
        $setting->update([
            'company_name' => $request->company_name,
            'company_name_ar' => $request->company_name_ar,
            'logo' => $logo,
            'logo_black' => $logo_black,
            'facebook_link' => $request->facebook_link,
            'linkedin_link' => $request->linkedin_link,
            'twitter_link' => $request->twitter_link,
            'youtube_link' => $request->youtube_link,
            'instagram_link' => $request->instagram_link,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'email' => $request->email,
            'location' => $request->location,
            'location_ar' => $request->location_ar,
            'google_map_link' => $request->google_map_link,
        ]);
        return redirect()->back()->with('success', 'تم تحديث البيانات بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(About $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
