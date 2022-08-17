<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddEmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.employee.index', [
            'employees' => Employee::orderBy('id', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddEmployeeRequest $request)
    {
        // dd($request->all());
        $photo = $request->file('photo')->store('files', 'public_folder');
        Employee::create([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'job_title' => $request->job_title,
            'job_title_ar' => $request->job_title_ar,
            'facebook_link' => $request->facebook_link,
            'linkedin_link' => $request->linkedin_link,
            'twitter_link' => $request->twitter_link,
            'photo' => $photo,
        ]);
        return redirect()->route('employee.index')->with('success', 'تمت اضافة المنتج بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('admin.employee.show', [
            'employee' => $employee
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('admin.employee.edit', [
            'employee' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(AddEmployeeRequest $request, Employee $employee)
    {
        $photo = $employee->photo;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('files', 'public_folder');
        }
        $employee->update([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'job_title' => $request->job_title,
            'job_title_ar' => $request->job_title_ar,
            'facebook_link' => $request->facebook_link,
            'linkedin_link' => $request->linkedin_link,
            'twitter_link' => $request->twitter_link,
            'photo' => $photo,
        ]);
        return redirect()->route('employee.index')->with('success', 'تم تعديل المنتج بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index')->with('success', 'تم حذف المنتج بنجاح');
    }

    public function changeStatus(Request $request, Employee $employee)
    {
        $employee->update([
            'status' => $request->status
        ]);
        return redirect()->route('employee.index')->with('success', 'تم تغيير الحالة بنجاح');
    }
}
