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

     public function delete($id){
        $data_wish = \App\Models\cart::find($id);
        $data_wish->delete($data_wish);
        return redirect('/wishlist')->with('success','Product is deleted');
     }

     public function sendData(Request $request)
     {
         $data_wissh= $request->all();
         DB::table('cart')->delete();
         return view('/cartdata', compact('data_wish'));
     }
}


