<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.index', [
            'products' => Product::orderBy('id', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddProductRequest $request)
    {
        // dd($request->all());
        $photo = $request->file('photo')->store('files', 'public_folder');
        Product::create([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'descr' => $request->descr,
            'descr_ar' => $request->descr_ar,
            'is_featured' => $request->is_featured ?? 0,
            'photo' => $photo,
        ]);
        return redirect()->route('product.index')->with('success', 'تمت اضافة المنتج بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.product.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(AddProductRequest $request, Product $product)
    {
        $photo = $product->photo;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('files', 'public_folder');
        }
        $product->update([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'descr' => $request->descr,
            'descr_ar' => $request->descr_ar,
            'is_featured' => $request->is_featured ?? 0,
            'photo' => $photo,
        ]);
        return redirect()->route('product.index')->with('success', 'تم تعديل المنتج بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'تم حذف المنتج بنجاح');
    }

    public function changeStatus(Request $request, Product $product)
    {
        $product->update([
            'status' => $request->status
        ]);
        return redirect()->route('product.index')->with('success', 'تم تغيير الحالة بنجاح');
    }
}
