<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.client.index', [
            'clients' => Client::orderBy('id', 'DESC')->paginate(20),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddClientRequest $request)
    {
        // dd($request->all());
        $logo = $request->file('logo')->store('files', 'public_folder');
        Client::create([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'descr' => $request->descr,
            'descr_ar' => $request->descr_ar,
            'phone' => $request->phone,
            'email' => $request->email,
            'location' => $request->location,
            'location_ar' => $request->location_ar,
            'is_featured' => $request->is_featured ?? 0,
            'logo' => $logo,
        ]);
        return redirect()->route('client.index')->with('success', 'تمت اضافة العميل بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('admin.client.show', [
            'client' => $client
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('admin.client.edit', [
            'client' => $client
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(AddClientRequest $request, Client $client)
    {
        $logo = $client->logo;
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->store('files', 'public_folder');
        }
        $client->update([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'descr' => $request->descr,
            'descr_ar' => $request->descr_ar,
            'phone' => $request->phone,
            'email' => $request->email,
            'location' => $request->location,
            'location_ar' => $request->location_ar,
            'is_featured' => $request->is_featured ?? 0,
            'logo' => $logo,
        ]);
        return redirect()->route('client.index')->with('success', 'تم تعديل العميل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index')->with('success', 'تم حذف العميل بنجاح');
    }
}
