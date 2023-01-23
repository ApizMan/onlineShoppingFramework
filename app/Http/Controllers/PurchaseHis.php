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
        return view('Purchase.PurchaseHistory', ['purchase' => $purchase]);
    }
    public function update(Request $request, $id)
    {
        $purchase = \App\Models\Payment::find($id);
        $purchase ->update($request->all());
        return redirect('PayHist')->with('success', 'Update Sudah');
    }
    public function destroy($id)
{
    $purchase = \App\Models\Payment::find($id);
    $purchase ->delete($purchase);
    return redirect('PayHist')->with('success','Sudah Delete Data Bos');
}
}
