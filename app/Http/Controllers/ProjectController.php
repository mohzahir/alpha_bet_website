<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProjectRequest;
use App\Models\Client;
use App\Models\project;
use App\Models\ProjectImage;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('admin.project.create', [
            'services' => Service::all(),
            'clients' => Client::all(),
        ]);
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
        try {
            DB::transaction(function () use ($request) {
                $photo = $request->file('photo')->store('files', 'public_folder');
                $project = project::create([
                    'service_id' => $request->service_id,
                    'client_id' => $request->client_id,
                    'start_date' => $request->start_date,
                    'finish_date' => $request->finish_date,
                    'location' => $request->location,
                    'location_ar' => $request->location_ar,
                    'name' => $request->name,
                    'name_ar' => $request->name_ar,
                    'descr' => $request->descr,
                    'descr_ar' => $request->descr_ar,
                    'short_descr' => $request->short_descr,
                    'short_descr_ar' => $request->short_descr_ar,
                    'is_featured' => $request->is_featured ?? 0,
                    'photo' => $photo,
                ]);

                $project_imgs = [];
                foreach ($request->project_imgs as $img) {
                    array_push($project_imgs, [
                        'project_id' => $project->id,
                        'path' => $img->store('files', 'public_folder'),
                    ]);
                }

                ProjectImage::insert($project_imgs);
            });
        } catch (\Throwable $th) {
            throw $th;
        }

        return redirect()->route('project.index')->with('success', 'تمت اضافة المشروع بنجاح');
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
            'project' => $project,
            'services' => Service::all(),
            'clients' => Client::all(),
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
        // dd($request->all());
        try {
            DB::transaction(function () use ($request, $project) {
                $photo = $project->photo;
                if ($request->hasFile('photo')) {
                    $photo = $request->file('photo')->store('files', 'public_folder');
                }
                $project->update([
                    'service_id' => $request->service_id,
                    'client_id' => $request->client_id,
                    'start_date' => $request->start_date,
                    'finish_date' => $request->finish_date,
                    'location' => $request->location,
                    'location_ar' => $request->location_ar,
                    'name' => $request->name,
                    'name_ar' => $request->name_ar,
                    'descr' => $request->descr,
                    'descr_ar' => $request->descr_ar,
                    'short_descr' => $request->short_descr,
                    'short_descr_ar' => $request->short_descr_ar,
                    'is_featured' => $request->is_featured ?? 0,
                    'photo' => $photo,
                ]);

                if ($request->project_imgs) {
                    $project_imgs = [];
                    foreach ($request->project_imgs as $img) {
                        array_push($project_imgs, [
                            'project_id' => $project->id,
                            'path' => $img->store('files', 'public_folder'),
                        ]);
                    }
                    ProjectImage::insert($project_imgs);
                }
            });
        } catch (\Throwable $th) {
            throw $th;
        }



        return redirect()->route('project.index')->with('success', 'تم تعديل المشروع بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('project.index')->with('success', 'تم حذف المشروع بنجاح');
    }

    public function changeStatus(Request $request, Project $project)
    {
        $project->update([
            'status' => $request->status
        ]);
        return redirect()->route('project.index')->with('success', 'تم تغيير الحالة بنجاح');
    }
}
