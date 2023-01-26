<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentMethodController extends Controller
{

    public function index(){
        $data_card = \App\Models\paymentmethods::all();
        return view('payment_method/payment_method',['data_card' => $data_card]);
    }

    public function create(Request $request){
        \App\Models\paymentmethods::create($request->all());
        return redirect('/paymentMethod') -> with('success', 'Your Card Success been Added!.');
    }

    public function edit($id){
        $data_card = \App\Models\paymentmethods::find($id);
        // dd($data_card);
        return view('payment_method/edit_payment_method', ['data_card'=>$data_card]);
    }

    public function update(Request $request, $id){
        $data_card = \App\Models\paymentmethods::find($id);
        $data_card -> update($request->all());
        // dd($data_card);
        return redirect('/paymentMethod') -> with('success', 'Your Card Success been Updated!.');
    }

    public function delete($id){
        $data_card = \App\Models\paymentmethods::find($id);
        $data_card -> delete($data_card);
        // dd($data_card);
        return redirect('/paymentMethod') -> with('delete', 'Your Card Success been Deleted!.');
    }
}
