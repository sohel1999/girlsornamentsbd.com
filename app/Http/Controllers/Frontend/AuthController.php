<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\EmailVaryfied;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return  view('frontend.auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $token = Str::random(20);
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' =>bcrypt( $request->input('password')),
            'address' => $request->input('address'),
            'remember_token' => Str::random(10),
            'status'=>true,
            'role'=>'customer',
            'token'=>$token
        ];
        try {
            $user = User::create($data);
            \Notification::send($user,new EmailVaryfied($token));
            notify()->success('Your registration successfully complete');
            return redirect()->back();
        }catch (\Throwable $throwable)
        {
            return  redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param $token
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verified($token)
    {
        $user = User::whereToken($token)->first();
        if(null === $user)
        {
            notify()->error('Token invalid');
            return redirect()->route('auth.index');
        }
        try {
            $user->update([
                'token' => null,
                'email_verified_at' => now()
            ]);
            notify()->success('Verified');
            return redirect()->route('auth.index');
        }catch (\Throwable $exception){
            notify()->error('Something went wrong');
            return redirect()->route('auth.index');
        }
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
