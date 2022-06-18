<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Barang;
use App\Models\Agen;
use App\Models\Reservation;
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

    public function delete($id) {
        $roleUser = User::find($id);
        $roleUser->delete();
        return redirect()->route('user.role')->with('success', 'Data berhasil dihapus');
    }

    public function trash() {
        $trashesUser = User::onlyTrashed()->get();
        return view('admin.restore-user', compact('trashesUser'));
    }

    public function restore($id) {
        $restoreUser = User::onlyTrashed()->where('id', $id);
        $restoreUser->restore();
        return redirect()->route('user.role')->with('toast_success', 'Data user berhasil di kemabalikan');
    }

    public function restoreAll()
    {
        $restoreAll = User::onlyTrashed();
        $restoreAll->restore();
        return back();
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }

    public function useragen()
    {
        $data = agen::all();
        return view('agen', compact('data'));
    }

    public function viewagen()
    {
        $data = agen::all();
        return view('admin.agen.index', compact('data'));
    }

    public function uploadagen(Request $request)
    {
        $data = new agen;

        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('agenimage', $imagename);

            $data->image=$imagename;

            $data->name=$request->name;

            $data->speciality=$request->speciality;

            $data->facebook=$request->facebook;

            $data->instagram=$request->instagram;

            $data->twitter=$request->twitter;

            $data->save();

            return redirect('/viewagen')->with('success', 'Berhasil Menambahkan');
    }

    public function updateagen($id)
    {
        $data = agen::find($id);

        return view('admin.agen.updateagen', compact('data'));

    }


    // Class editagen
    public function editagen(Request $request, $id)
    {
        $data = agen::find($id);

        $image = $request->image;

        if($image){

            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('agenimage', $imagename);

            $data->image=$imagename;
        }

            $data->name=$request->name;

            $data->speciality=$request->speciality;

            $data->facebook=$request->facebook;

            $data->instagram=$request->instagram;

            $data->twitter=$request->twitter;

            $data->save();

            return redirect()->back()->with('success', 'Profil Berhasil di update');

    }

    public function addagen()
    {
        return view('admin.agen.add');
    }

        // Class deleteagen
        public function deleteagen($id)
        {
            $data = agen::find($id);

            $data->delete();

            return redirect('viewagen')->with('success', 'Berhasil Menghapus Orang');
        }

    // Class aboutus

    public function aboutus()
    {
        return view('aboutus');
    }


    // Class     contact
    public function contact()
    {
        return view('contactus');
    }

    // class reservation
    public function reservation(Request $request)
    {
        $data = new reservation;

            $data->name=$request->name;

            $data->email=$request->email;

            $data->phone=$request->phone;

            $data->guest=$request->guest;

            $data->date=$request->date;

            $data->time=$request->time;

            $data->message=$request->message;

            $data->save();

            return redirect()->back()->with('success', 'Pesan Anda Terkirim');
    }

    // class viewreservation
    public function viewreservation()
    {
        $data = reservation::all();

        return view('admin.viewreservation', compact('data'));
    }

}
