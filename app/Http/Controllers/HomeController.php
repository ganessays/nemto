<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }
    public function contact_us()
    {
        $title = 'Contact-Us';
        return view('user.pages.contact_us',compact('title'));
    }

    public function getLogin(){
        return view('auth.login');
    }
    public function postLogin(){
        $this->validate(request(),[
            'email'=>'required',
            'password'=>'required'
        ]);
        $field = filter_var(request('email'),FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        if (Auth::attempt([$field => request('email'), 'password' => request('password')])) {
            if (Auth::check()) {
                if (Auth::user()->type == 'admin') {
                    return redirect('admin');
                }
                if (Auth::user()->type == 'staff') {
                    return redirect('staff');
                }
                if (Auth::user()->type == 'users' && Auth::user()->status=='active') {
                    return redirect('users');
                }
            }
        }
        return redirect('login')->withErrors(['email'=>'Invalid credentail'])->withInput(request()->only('email'));
    }

    public function getregister(Request $request){
        return view('auth.register');
    }


}
