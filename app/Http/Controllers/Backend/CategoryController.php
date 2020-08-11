<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.category.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('backend.category.create');
    }


    public function store(Request $request)
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
            $file->move(public_path() . '/upload/category', $randomName);
        }
        $merge = $collection->merge(['image' => $randomName]);
        try {
            Category::create($merge->toArray());
            notify()->success('Category successfully created.');
            return redirect()->route('categories.index');
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
        return view('backend.category.edit', [
            'category' => Category::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = [
            'status' => $request->input('status') ?? 0,
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ];
        $category = Category::findOrFail($id);
        if ($request->has('image')) {
            $file = $request->file('image');
            $randomName = uniqid('ymd', true) . '.' . $file->clientExtension();
            $file->move(public_path() . '/upload/brand', $randomName);
            $data['image'] = $randomName;
            @unlink(public_path('upload/brand/' . $category->image));
            $category->update($data);
            notify()->success('Category successfully updated.');
            return redirect()->route('categories.index');
        }
        $category->update($data);
        notify()->success('Category successfully updated.');
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        try {
            Category::find($id)->delete();
            notify()->success('Category successfully deleted.');
            return redirect()->route('categories.index');
        } catch (\Throwable $throwable) {
            notify()->success('Something went wrong.');
            return redirect()->route('categories.index');
        }
    }
}
