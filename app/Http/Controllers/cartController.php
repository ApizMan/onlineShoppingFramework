<?php

namespace App\Http\Controllers\cartController;
namespace App\Http\Controllers;
use App\Models\cart;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function index(){
        $data_cart = \App\Models\cart::all();
        return view('add_cart',['data_cart'=> $data_cart]);
     }

     public function create(Request $request){
        \App\Models\cart::create($request->all());
        return redirect('/cartdata')->with('success','New Data Insert!');
     }
}


