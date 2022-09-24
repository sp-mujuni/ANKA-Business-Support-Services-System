<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        //select bookings of particular user
        $arr['bookings'] = Booking::all();
        return view('customer.cart.index')->with($arr);
    }
}
