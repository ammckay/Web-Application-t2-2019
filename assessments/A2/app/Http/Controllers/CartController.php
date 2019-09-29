<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Order;
use App\Cart;
use App\Product;
use App\Manufacturer;
use Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        $carts = Cart::all();
        // Get total price of cart
        $sum = Cart::select('price')
                            ->selectRaw('SUM(price) as total')
                            ->get();

        return view('carts.index')->with('carts', $carts)->with('sum', $sum)->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.item');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = new Cart();
        $cart->user_name = $request->user_name;
        $cart->product_name = $request->product_name;
        $cart->price = $request->price; 
        $cart->address = $request->address; 
        $cart->manufacturer_id = $request->manufacturer; 
        $cart->save();
        return redirect("cart");
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
        // Delete the selected item from the cart
        $cart = Cart::find($id);
        $cart->delete();
        return redirect("cart");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function purchase()
    {
        // Delete the selected item from the cart
        $cart = Cart::all();
        $cart->delete();
        return redirect("cart");
    }
}
