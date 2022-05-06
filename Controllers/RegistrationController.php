<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table_user_curd;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        echo "<pre>";
        print_r($request->all());
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        echo "<pre>";
        print_r($request->all());
        $curd = new Table_user_curd;
        $curd->name = $request['name'];
        $curd->email = $request['email'];
        $curd->password = $request['password'];
        $curd->save();

        return redirect('/view');
    }

    public function view()
    {

        /*echo "<pre>";
        print_r($user);
        die;*/
        $users = Table_user_curd::all();
        $data = compact('users');
        return view('view')->with($data);
    }


    public function delete($id)
    {

        Table_user_curd::find($id)->delete();

        return redirect()->back();
    }
    public function edit($id)
    {

        $var = Table_user_curd::find($id);
        $data = compact('var');
        return view('user')->with($data);
    }
}
