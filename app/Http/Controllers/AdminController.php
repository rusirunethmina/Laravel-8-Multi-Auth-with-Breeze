<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function loginView()
    {
        return view('admin.login');
    }
    public function registerView()
    {
        return view('admin.register');
    }

    public function daashboard()
    {
        return view('admin.dashboard');
    }

    public function login(Request $request)
    {
        // dd($request->all());

        $check = $request->all();
        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('seller.dashboard')->with('error', 'Admin login Successfully');
        } else {
            return back()->with('error', 'Invaild Email or Password');
        }
    }

    public function Adminlogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('error', 'Admin logout Successfully');
    }

    public function register(Request $request)
    {
        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('login.form')->with('error','Admin Created Successfully');
    }
}
