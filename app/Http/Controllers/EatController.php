<?php

namespace App\Http\Controllers\EatController;
namespace App\Http\Controllers;
use App\Models\Eat;
use Illuminate\Http\Request;

class EatController extends Controller
{
    public function index(){
        $data_eat = \App\Models\eat::all();
        // dd($data_eat);
        return view('Category/eat', ['data_eat'=> $data_eat]);
    }
}
