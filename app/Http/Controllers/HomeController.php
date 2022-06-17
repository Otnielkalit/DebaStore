<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        $usertype=Auth::user()->usertype;
        if($usertype == '1')
        {
            return view('admin.home');
        }
        else
        {

            $barangs = Barang::paginate('20');
            return view('home', compact('barangs'));
        }
    }

    public function userManagement() {
        $dataUser = User::all();
        return view('admin.user-management', compact('dataUser'));
    }

    public function logout()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }
}
