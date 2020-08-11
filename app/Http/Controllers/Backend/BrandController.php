<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandStoreRequest;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.brand.index', [
            'brands' => Brand::orderByDesc('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('backend.brand.create');
    }


    public function store(BrandStoreRequest $request)
    {
        $collection = collect([
            'status' => $request->input('status') ?? 0,
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);
        $randomName = null;
        if ($request->has('image')) {
            $file = $request->file('image');
            $randomName = uniqid('ymd', true) . '.' . $file->clientExtension();
            $file->move(public_path() . '/upload/brand', $randomName);
        }
        $merge = $collection->merge(['image' => $randomName]);
        try {
            Brand::create($merge->toArray());
            notify()->success('Brand successfully created.');
            return redirect()->route('brands.index');
        } catch (\Throwable $throwable) {
            notify()->error('Something went wrong');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return view('backend.brand.edit', [
            'brand' => Brand::findOrFail($id)
        ]);
    }


    public function update(Request $request, $id)
    {
        $data = [
            'status' => $request->input('status') ?? 0,
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ];
        $brand = Brand::findOrFail($id);
        if ($request->has('image')) {
            $file = $request->file('image');
            $randomName = uniqid('ymd', true) . '.' . $file->clientExtension();
            $file->move(public_path() . '/upload/brand', $randomName);
            $data['image'] = $randomName;
            @unlink(public_path('upload/brand/'.$brand->image));
            $brand->update($data);
            notify()->success('Brand successfully updated.');
            return redirect()->route('brands.index');
        }
        $brand->update($data);
        notify()->success('Brand successfully updated.');
        return redirect()->route('brands.index');
    }


    public function destroy($id)
    {
        try {
            Brand::find($id)->delete();
            notify()->success('Brand successfully deleted.');
            return redirect()->route('brands.index');
        } catch (\Throwable $throwable) {
            notify()->success('Something went wrong.');
            return redirect()->route('brands.index');
        }
    }
}
