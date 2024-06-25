<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        try{
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash the password
        ]);
        }
        catch(QueryException $e){
            if($e->errorInfo[1] == 1062){
                return back()->withErrors(['email' => 'User already registered!']);
            }
            else{
                throw $e;
             }
        }
        return redirect()->route('login');
    }


    public function loginMatch(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email'=>'the provided credentials do not match our records']);
    }

    public function dashPage(){
        if(Auth::check()){
            return view('dashboard');
        }
        else{
            return redirect()->route('login');
        }
    }

    public function inner(){
        if(Auth::check()){
            return view('inner');
        }
        else{
            return redirect()->route('login');
        }
    }

    public function logout(){
        Auth::logout();
        return view('login');
    }
}
