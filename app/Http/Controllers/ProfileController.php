<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        $data_user = \App\Models\Profile::all();
        return view ('mainpage',['data_user'=> $data_user]);
    }


    public function view($id){
        $data_user = \App\Models\Profile::find($id);
        return view('ProfileManagement.Profile',['data_user'=> $data_user]);
    }


    public function edit($id)
    {
        $data_user = \App\Models\Profile::find($id);
        return view('edit',['data_user'=> $data_user]);
    }

    public function update(Request $request, $id)
    {
        $data_user = \App\Models\Profile::find($id);
        echo $data_user->profile != null;
        $data_user->update($request->all());
        return redirect('/profile/9/view')->with('success','Data has been Updated');
    }

    public function randomId(Request $request){
        $randomId = DB::table('profile')->inRandomOrder()->pluck('id')->first();
        return $randomId;
      }
}
