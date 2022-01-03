<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Seller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class SellerController extends Controller
{
    public function daashboard()
    {
        return view('seller.dashboard');
    }

    public function loginView()
    {
        return view('seller.login');
    }

    public function registerView()
    {
        return view('seller.register');
    }

    public function login(Request $request)
    {
       $check = $request->all();
       if (Auth::guard('seller')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
        return redirect()->route('seller.dashboard')->with('error', 'Seller login Successfully');
    } else {
        return back()->with('error', 'Invaild Email or Password');
    }
    }

    public function register(Request $request)
    {
        Seller::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('seller.login.form')->with('error','Seller Created Successfully');
    }
}
