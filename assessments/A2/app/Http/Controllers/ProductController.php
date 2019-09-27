<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Manufacturer;
use App\Order;
use App\User;

class ProductController extends Controller
{
    // If not logged in, cannot view create and edit pages
    public function __construct() { 
        // Only users who are a Restaurant user can view the create and edit pages
        $this->middleware('checkrole', ['only'=>'create']);
        $this->middleware('checkrole', ['only'=>'edit']);
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Display 5 products per link
        $products = Product::paginate(5);
        $manufacturers = Manufacturer::all();
        return view('products.index')->with('products', $products)->with('manufacturers', $manufacturers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create_form')->with('manufacturers', Manufacturer::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255|unique:products,name',
            'price' => 'required|numeric|gte:0', 
            'manufacturer' =>'exists:manufacturers,id'
        ]);

        $image_store = request()->file('image')->store('products_images','public');

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price; 
        $product->manufacturer_id = $request->manufacturer; 
        $product->image = $image_store;
        $product->save();
        return redirect("product/$product->id");
    }

    public function prod($id) {
        $manufacturer = Manufacturer::find($id);
        // Products where the manufacturer_id = manufacturer id, paginate 5 products
        $products = Product::where('manufacturer_id',$id)->paginate(5);
        return view('products.prod')->with('products', $products)->with('manufacturer', $manufacturer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $manufacturers = Manufacturer::all();
        $product = Product::find($id);
        $user = User::all();
        $order = Order::all();
        return view('products.item')->with('product', $product)->with('manufacturers', $manufacturers)->with('user', $user)->with('order', $order);
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit_form')->with('product', $product)->with('manufacturers', Manufacturer::all());
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
        $this->validate($request, [
            'name' => 'required|max:255',
            // gte:0  for the price cannot be a negative number
            'price' => 'required|numeric|gte:0', 
            'manufacturer' =>'exists:manufacturers,id'
        ]);

        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price; 
        $product->manufacturer_id = $request->manufacturer; 
        $product->save();
        return redirect("product/$product->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect("product");
    }

}
