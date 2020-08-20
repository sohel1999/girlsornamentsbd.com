<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = session('cart') ?? [];
        $total = collect($carts)->sum(function ($item) {
            $total = 0;
            return $total += $item['sub_total'];
        });

        return view('frontend.cart.index', compact('carts', 'total'));
    }

    public function addToCart($productId)
    {
        $cart = session('cart') ?? [];
        $product = Product::findOrFail($productId);
        if (array_key_exists($productId, $cart)) {
            $cart[$productId] = [
                'id'=>$productId,
                'price' => $product->price,
                'name' => $product->name,
                'quantity' => $cart[$productId]['quantity'] + 1,
                'discount' => 0,
                'sub_total' => $product->price * $cart[$productId]['quantity'],
            ];
        } else {
            $cart[$productId] = [
                'id'=>$productId,
                'price' => $product->price,
                'quantity' => 1,
                'discount' => 0,
                'image' => json_decode($product->images)[0],
                'sub_total' => $product->price,
                'name' => $product->name
            ];
            session(['cart' => $cart]);
            return redirect()->route('shop.index');
        }
        session()->put('cart', $cart);
        notify()->success('Successfuly added item in cart');
        return redirect()->route('shop.index');
    }
    public function remove($id){
        $carts = session('cart');
        unset($carts[$id]);
        session()->put('cart', $carts);
        notify()->success('Cart successfully updated');
         return redirect()->back();

    }

    public function update(Request $request, $id)
    {
        $carts = session('cart') ?? [];
        $carts[$id]['quantity']= $request->input('quantity');
        $carts[$id]['sub_total']= $carts[$id]['sub_total'] * $carts[$id]['quantity'];
        session()->put('cart', $carts);
        notify()->success('Cart successfully updated');
         return redirect()->back();
    }

    public function clear()
    {
        session()->forget('cart');
        session()->flush();
        notify()->success('Sucessfully Cart clear');
        return redirect()->back();
    }
}
