<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

          $orders = Order::query();
          $total_orders = $orders->count('*');
         $sales = $orders->sum('total');
         $total_customer = User::query()->where('role','customer')->count('*');
         return User::first();
        return view('backend.dashboard.index',[
            'total_order'=>$total_orders,
            'sales'=>$sales,
            'total_customer'=>$total_customer
        ]);
    }
}
