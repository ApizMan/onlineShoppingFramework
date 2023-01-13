<?php

namespace App\Http\Controllers\wishController;
namespace App\Http\Controllers;
use App\Models\cart;
use Illuminate\Http\Request;


class wishController extends Controller
{
    public function index(){
        $data_wish = \App\Models\cart::all();
        return view('wishlist/wishlist',['data_wish'=> $data_wish]);
     }

     public function create(Request $request){
        \App\Models\cart::create($request->all());
        return redirect('/wishlist')->with('success','New Data Insert!');
     }
}


