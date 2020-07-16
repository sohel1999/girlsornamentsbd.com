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
        return view('backend.product.index',[
            'products'=>Product::orderByDesc('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return  view('backend.product.create',[
            'categories'=>Category::all(),
            'brands'=>Brand::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $photos = [];
        if($request->hasFile('photos')){

            foreach ($request->file('photos') as $file)
            {
                $randomName = uniqid('ymd',true). '.' .$file->clientExtension();
                $file->move(public_path().'/upload/product',$randomName);
                array_push($photos,$randomName);
            }

        }
        $data = [
            'category_id'=>$request->input('category_id'),
            'brand_id'=>$request->input('brand_id'),
            'name'=>$request->name,
            'description'=>$request->input('description'),
            'price'=>$request->input('price'),
            'stock'=>$request->input('stock'),
            'images'=>json_encode($photos),
            'status'=>$request->input('status') ?? 0
            ];

        try{
            Product::create($data);
            notify()->success('Product created successfully');
            return  redirect()->route('products.index');
        }catch (\Throwable $throwable)
        {
            dd($throwable->getMessage());
            return  redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
