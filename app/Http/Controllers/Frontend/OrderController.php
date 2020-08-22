<?php

namespace App\Http\Controllers\Frontend;

use Throwable;
use App\Models\Payment;
use Illuminate\Http\Request;
use Uzzal\SslCommerz\Client;
use Uzzal\SslCommerz\Customer;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Uzzal\SslCommerz\SessionRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $carts = session('cart');

        return view('frontend.order.checkout',[
            'carts'=>$carts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $carts = session('cart')?? [];
            $total = collect($carts)->sum(function ($item) {
            $total = 0;
            return $total += $item['sub_total'];
        });
        return view('frontend.order.checkout', [
            'carts' => $carts,
            'total'=>$total
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'country'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'address'=>'required',
            'city'=>'required',
            'postal_code'=>'required',
            'email'=>'email|required',
            'phone'=>'required'
        ]);
        try{
            $carts = session('cart');
            $total = array_sum(array_column($carts,'sub_total'));
            $customer = new Customer($request->user()->name, $request->user()->email, $request->user()->phone);
            $resp = Client::initSession($customer, $total);
            $order = Order::create([
                'order_number'=>Order::orderNumber(),
                'user_id'=>auth()->user()->id,
                'total'=>$total,
                'cus_name'=>$request->input('first_name') .'|'.$request->input('last_name'),
                'cus_email'=>$request->input('email'),
                'address'=>$request->input('address'),
                'city'=>$request->input('city'),
                'postal_code'=>$request->input('postal_code'),
                'cus_phone'=>$request->input('phone')
            ]);
            foreach($carts as $item){
                 OrderItem::create([
                     'order_id'=>$order->id,
                     'product_id'=>$item['id'],
                     'unit_price'=>$item['price'],
                     'quantity'=>$item['quantity'],
                     'line_total'=>$item['sub_total']
                 ]);
            }
            Payment::create([
                'order_id'=>$order->id,
                'tran_id'=>$resp->getTransactionId(),
                'status'=>'pending'
            ]);
            return redirect($resp->getGatewayUrl());
        }catch(Throwable $th){
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
