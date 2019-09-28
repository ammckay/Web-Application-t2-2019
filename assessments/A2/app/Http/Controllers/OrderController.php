<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Order;
use App\Product;
use App\Manufacturer;
use Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Order the orders by date they were created with oldest at the top and newest at the bottom
        $orders = Order::orderby('updated_at', 'asc')->where('manufacturer_id', Auth::user()->manufacturer_id)->get();
        $manufacturers = Manufacturer::all();
        $products = Product::all();
        $users = User::all();
        return view('orders.index')->with('orders', $orders)->with('manufacturers', $manufacturers)->with('products', $products)->with('users', $users);
    }

    public function top() {
        // Get names of the top 5 of the most ordered dishes in the last 30 days, ordered by date added in ascending
        $top = Order::select('product_name')
                            ->selectRaw('COUNT(*) as c')
                            ->groupby('product_name')
                            ->orderby('c', 'desc')
                            ->limit(5)
                            ->whereDate('updated_at','>',Carbon::now()->subDays(30))
                            ->get();

        return view('orders.top')->with('top', $top);
    }  

    public function statistic() {
        // Get names of the top 5 of the most ordered dishes in the last 30 days, ordered by date added in ascending
        $sum = Order::select('price')
                            ->selectRaw('SUM(price) as total')
                            ->where('manufacturer_id', Auth::user()->manufacturer_id)
                            ->get();
        
        // Weekly sale totals
        $weekly = Order::select('price')
                            ->selectRaw('SUM(price) as total, month(updated_at) as month')
                            ->where('manufacturer_id', Auth::user()->manufacturer_id)
                            ->groupby('month')
                            ->get();

        return view('orders.statistic')->with('sum', $sum)->with('weekly', $weekly);
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
        $order = new Order();
        $order->user_name = $request->user_name;
        $order->product_name = $request->product_name;
        $order->price = $request->price; 
        $order->address = $request->address; 
        $order->manufacturer_id = $request->manufacturer; 
        $order->save();
        return redirect("order/$order->id");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view('orders.show')->with('order', $order);
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
