<?php

namespace App\Http\Controllers\cartController;
namespace App\Http\Controllers;
use App\Models\cart;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function index(){
        $data_cart = \App\Models\cart::all();
        return view('Cart/add_cart',['data_cart'=> $data_cart]);
     }

     public function create(Request $request){
        \App\Models\cart::create($request->all());
        return redirect('/')->with('success','New Data Insert!');
     }

     public function update(Request $request, $id){
      $data_cart = \App\Models\cart::find($id);
      $data_cart->update($request->all());
      return redirect('/cartdata')->with('success',);
   }

     public function delete($id){
      $data_cart = \App\Models\cart::find($id);
      $data_cart->delete($data_cart);
      return redirect('/cartdata')->with('success','Product is deleted');
   }

}





