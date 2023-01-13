<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseHis extends Controller
{
    public function index()
    {
        $purchase = \App\Models\Payment::all();
        return view('Purchase.TablePayHistory', ['purchase' => $purchase]);
    }
    public function read($id)
    {
        $purchase = \App\Models\Payment::find($id);
        return view('Purchase.PurchaseHistory',['purchase'=> $purchase]);

    }
    public function edit($id){
        $purchase = \App\Models\Payment::find($id);
        return view('',['purchase'=> $purchase]);
    }
}
