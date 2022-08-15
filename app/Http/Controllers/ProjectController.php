<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.project.index', [
            'projects' => Project::orderBy('id', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddProjectRequest $request)
    {
        // dd($request->all());
        $photo = $request->file('photo')->store('files', 'public_folder');
        project::create([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'descr' => $request->descr,
            'descr_ar' => $request->descr_ar,
            'short_descr' => $request->short_descr,
            'short_descr_ar' => $request->short_descr_ar,
            'is_featured' => $request->is_featured ?? 0,
            'photo' => $photo,
        ]);
        return redirect()->route('project.index')->with('success', 'تمت اضافة الخدمة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.project.show', [
            'project' => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.project.edit', [
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(AddProjectRequest $request, Project $project)
    {
        $photo = $project->photo;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('files', 'public_folder');
        }
        $project->update([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'descr' => $request->descr,
            'descr_ar' => $request->descr_ar,
            'short_descr' => $request->short_descr,
            'short_descr_ar' => $request->short_descr_ar,
            'is_featured' => $request->is_featured ?? 0,
            'photo' => $photo,
        ]);
        return redirect()->route('project.index')->with('success', 'تم تعديل الخدمة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if (count($project->projects) > 0) {
            return redirect()->route('project.index')->with('warning', 'هذه الخدمة لديها مشاريع تابعة لها ولا يمكن حذفها');
        }
        $project->delete();
        return redirect()->route('project.index')->with('success', 'تم حذف الخدمة بنجاح');
    }

    public function changeStatus(Request $request, Project $project)
    {
        $project->update([
            'status' => $request->status
        ]);
        return redirect()->route('project.index')->with('success', 'تم تغيير الحالة بنجاح');
    }
}
