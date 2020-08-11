<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('backend.slider.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      try {
            $randomName = '';
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $randomName = uniqid('ymd', true) . '.' . $file->clientExtension();
                $file->move(public_path() . '/upload/slider', $randomName);
            }
            $data = [
                'action_name' => $request->input('action_name'),
                'action_url' => $request->input('action_url'),
                'text' => $request->input('text'),
                'image' => $randomName,
                'is_active' => $request->input('status') == 1 ? true : false
            ];
            Slider::create($data);
            notify()->success('Slider create successfully');
            return redirect()->route('sliders.index');
      } catch (\Throwable $th) {
            notify()->error('Something went wrong');
            dd($th->getMessage());
           return redirect()->back()->withInput();
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
