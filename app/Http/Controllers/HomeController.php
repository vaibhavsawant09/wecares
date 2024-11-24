<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->role_id == Role::ADMIN){
            return view('ins_dashboard.index');
        }else if(Auth::user()->role_id == Role::STAFF){
            return view('staff_dashboard.index');            
        }return view('user_dashboard.index');
    }
}
