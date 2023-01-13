<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentMethodController extends Controller
{
    //
    public function index(){
        $data_payment_method = \App\Models\paymentMethod::all();
        return view('payment_method/payment_method' /*index.blade.php*/, ['data_payment_method' => $data_payment_method]);
    }
}
