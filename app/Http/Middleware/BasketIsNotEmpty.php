<?php

namespace App\Http\Middleware;

use App\Order;
use Closure;

class BasketIsNotEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $orderId = session('orderId');
        if(!is_null($orderId)){
            $order = Order::findorFail($orderId);
            if($order->films->count() == 0){
                session()->flash('warning', 'Ваша поличка пуста');
                return redirect()->route('index');
            }
        }
        
        return $next($request);
    }
}
