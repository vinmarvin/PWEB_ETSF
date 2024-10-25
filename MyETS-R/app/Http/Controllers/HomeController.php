<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends Controller
{
    public function index(){
        return view ('admin.index');
    }

    public function home(){

        $product_cust = Products::all();
        return view('home.index', compact('product_cust'));
    }

    public function login_home(){
        $product_cust = Products::all();
        return view('home.index', compact('product_cust'));

    }

    public function product_details($id){
        $fetch_data = Products::find($id);
        return view('home.product_details', compact('fetch_data'));
    }

}

