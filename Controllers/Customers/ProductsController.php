<?php

namespace App\Http\Controllers\Customers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\DB;



class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['products'] = Product::all();
        return view('customer.products.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prr['products'] = Product::all();
        return view('customer.products.create')->with($prr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Booking $booked)
    {  
        $pay = DB::table('products')->where('proname', $request->prod_name)->value('prorate');
        $finalpay = $pay*(int)$request->quantity;
        $booked->amount = $finalpay;

        DB::table('products')
              ->where('proname', $request->prod_name)
              ->update(['prosales' => $finalpay]);

        if((int)$request->quantity==1){
            DB::table('products')
              ->where('proname', $request->prod_name)
              ->update(['points' => 2]);
        }else if((int)$request->quantity>1){
            DB::table('products')
              ->where('proname', $request->prod_name)
              ->update(['points' => 4]);
        }

        DB::table('products')->decrement('stocksize', (int)$request->quantity);

        $booked->quantity = $request->quantity;
        $booked->product_name = $request->prod_name;
        $booked->customer_name = $request->cust_name;

        

        $booked->save();
        return redirect()->route('products.products.index');
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
    public function destroy($product_id)
    {
        Booking::destroy($product_id);
        return redirect('/home/cart');
    }
}
