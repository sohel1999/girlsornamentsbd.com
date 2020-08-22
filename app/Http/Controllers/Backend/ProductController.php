<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.product.index', [
            'products' => Product::with('brand','category')->orderByDesc('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('backend.product.create', [
            'categories' => Category::all(),
            'brands' => Brand::all()
        ]);
    }

    /**
     * Store a newly update resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photos = [];
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $file) {
                $randomName = uniqid('ymd', true) . '.' . $file->clientExtension();
                $file->move(public_path() . '/upload/product', $randomName);
                array_push($photos, $randomName);
            }
        }
        $data = [
            'category_id' => $request->input('category_id'),
            'brand_id' => $request->input('brand_id'),
            'name' => $request->name,
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'images' => json_encode($photos),
            'status' => $request->input('status') ?? 0
        ];

        try {
            Product::create($data);
            notify()->success('Product update successfully');
            return redirect()->route('products.index');
        } catch (\Throwable $throwable) {
            notify()->success('Product update successfully');
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
        return view('backend.product.edit', [
            'product' => Product::findOrFail($id),
            'categories' => Category::all(),
            'brands' => Brand::all()
        ]);
    }


    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $photos = [];
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $file) {
                $randomName = uniqid('ymd', true) . '.' . $file->clientExtension();
                $file->move(public_path() . '/upload/product', $randomName);
                array_push($photos, $randomName);
            }
        }
        $data = [
            'category_id' => $request->input('category_id'),
            'brand_id' => $request->input('brand_id'),
            'name' => $request->name,
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'status' => $request->input('status') ?? 0
        ];
        if (!empty($photos)) {
            $data['images'] = json_encode($photos);
            $product->update($data);
            notify()->success('Product update successfully');
            return redirect()->route('products.index');
        }
        try {
            $product->update($data);
            notify()->success('Product update successfully');
            return redirect()->route('products.index');
        } catch (\Throwable $throwable) {
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            Product::find($id)->delete();
            notify()->success('Product successfully deleted.');
            return redirect()->route('brands.index');
        } catch (\Throwable $throwable) {
            notify()->success('Something went wrong.');
            return redirect()->route('products.index');
        }
    }
}
