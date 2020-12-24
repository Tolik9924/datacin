<?php

namespace App\Http\Controllers;
use App\User;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
     public function basket(){
        $orderId = session('orderId');
        if(!is_null($orderId)){
        	$order = Order::findOrFail($orderId);
        }
        return view('basket', compact('order'));
    }

    public function basketAdd($filmId)
    {
    	$orderId = session('orderId');
    	if(is_null($orderId)){
    		$order = Order::create();
    		session(['orderId' => $order->id]);
    	}else{
    		$order = Order::find($orderId);
            $order->films()->attach($filmId);
    	}

        /*if(Auth::check()){
            $order->user_id = Auth::id();
            $order->save();
        }*/


    	 return redirect()->route('basket');
    }

     public function basketRemove($filmId)
    {
    	$orderId = session('orderId');
    	if(is_null($orderId)){
    		return redirect()->route('basket');
    	}
    	$order = Order::find($orderId);
		$order->films()->detach($filmId);

    	 return redirect()->route('basket');
    }
}
