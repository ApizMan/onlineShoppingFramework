<?php

namespace App\Http\Controllers\EatController;
namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function view(){
        $data_review = \App\Models\review::all();
        return view('Category.Pick.review', ['data_review'=> $data_review]);
    }
    public function edit($id){
        $data_review = \App\Models\review::find($id);
        return view('Category.Pick.edit', ['data_review'=>$data_review]);
    }

    public function update(Request $request, $id){
        $data_review = \App\Models\review::find($id);
        $data_review -> update($request->all());
        return redirect('/categories/review')->with('success', 'New Data Update');
    }

    public function delete(Request $request, $id){
        $data_review = \App\Models\review::find($id);
        $data_review -> delete($data_review);
        return redirect('/categories/review')->with('success', 'Data Delete');
    }

}
