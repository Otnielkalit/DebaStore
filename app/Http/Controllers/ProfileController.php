<?php

namespace App\Http\Controllers;
use Auth;
use Alert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }

    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();

        return view('user.profile.index', compact('user'));
    }

    public function update(Request $request)
        {
            $this->validate($request, [
                'password' => 'confirmed',
            ]);

            $user = User::where('id', Auth::user()->id)->first();
            $user->name     = $request->name;
            $user->email    = $request->email;
            $user->nohp     = $request->nohp;
            $user->alamat   = $request->alamat;
            if(!empty($request->password))
            {
                $user->password = Hash::make($request->password);
            }
            $user->update();
            return redirect('profile')->with('success', 'Berhasil Mengupdate Profil');
        }

        public function profileAdmin() {
            $user = User::where('id', Auth::user()->id)->first();
            return view('admin.profile', compact('user'));
        }

        public function setting() {
            $user = User::where('id', Auth::user()->id)->first();
            return view('admin.settings', compact('user'));
        }

        public function updateProfileAdmin(Request $request)
        {
            $this->validate($request, [
                'password' => 'confirmed',
            ]);

            $user = User::where('id', Auth::user()->id)->first();
            $user->name     = $request->name;
            $user->email    = $request->email;
            $user->nohp     = $request->nohp;
            $user->alamat   = $request->alamat;
            if(!empty($request->password))
            {
                $user->password = Hash::make($request->password);
            }
            $user->update();
            return redirect()->route('profile.admin')->with('toast_success', 'Berhasil Mengupdate Profil');
        }
}
