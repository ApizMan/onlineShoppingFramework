<?php

namespace App\Http\Controllers\EatController;
namespace App\Http\Controllers;
use App\Models\Eat;
use Illuminate\Http\Request;

class EatController extends Controller
{
    public function index(){
        $data_eat = \App\Models\eat::all();
        return view('Category.eat', ['data_eat'=> $data_eat]);
    }

    public function all(){
        $data_eat = \App\Models\eat::all();
        return view('Category.Selection.all', ['data_eat'=> $data_eat]);
    }

    public function asian(){
        $data_eat = \App\Models\eat::all();
        return view('Category.Selection.asian', ['data_eat'=> $data_eat]);
    }

    public function buffet(){
        $data_eat = \App\Models\eat::all();
        return view('Category.Selection.buffet', ['data_eat'=> $data_eat]);
    }

    public function japanese(){
        $data_eat = \App\Models\eat::all();
        return view('Category.Selection.japanese', ['data_eat'=> $data_eat]);
    }

    public function korean(){
        $data_eat = \App\Models\eat::all();
        return view('Category.Selection.korean', ['data_eat'=> $data_eat]);
    }

    public function view($id){
        $data_eat = \App\Models\eat::find($id);
        return view('Category.Pick.view', ['data_eat'=> $data_eat]);
    }
}
