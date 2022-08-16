<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddAboutRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.about.index', [
            'about' => About::findOrFail(1),
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
    public function store(AddAboutRequest $request)
    {
        // dd($request->all());
        About::findOrFail(1)->update([
            'descr' => $request->descr,
            'descr_ar' => $request->descr_ar,
            // 'goal' => $request->goal,
            // 'goal_ar' => $request->goal_ar,
            'mission' => $request->mission,
            'mission_ar' => $request->mission_ar,
            'vision' => $request->vision,
            'vision_ar' => $request->vision_ar,
            'skill1_name' => $request->skill1_name,
            'skill1_name_ar' => $request->skill1_name_ar,
            'skill1_rate' => $request->skill1_rate,
            'skill2_name' => $request->skill2_name,
            'skill2_name_ar' => $request->skill2_name_ar,
            'skill2_rate' => $request->skill2_rate,
            'skill3_name' => $request->skill3_name,
            'skill3_name_ar' => $request->skill3_name_ar,
            'skill3_rate' => $request->skill3_rate,
            'skill4_name' => $request->skill4_name,
            'skill4_name_ar' => $request->skill4_name_ar,
            'skill4_rate' => $request->skill4_rate,
            'video_url' => $request->video_url,
        ]);
        return redirect()->back()->with('success', 'تم تحديث البيانات بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
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
