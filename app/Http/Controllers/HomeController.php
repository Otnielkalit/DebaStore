<?php

namespace App\Http\Controllers;
use App\Models\Agen;
use App\Models\User;
use App\Models\Barang;
use App\Models\Pesanan;
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

    public function getUpdatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['updated_at'])
           ->diffForHumans();
    }
    
    public function index()
    {
        $usertype=Auth::user()->usertype;
        if($usertype == '1')
        {
            return view('admin.home', [
                "title" => "Dashboard"
            ]);
        }
        else
        {
<<<<<<< HEAD
            return view('user.menu', [
                "title" => 'Home'
            ]);
=======
            $barangs = Barang::paginate('20');
            return view('home', compact('barangs'));
>>>>>>> b4dd1e9b329216482322e3eef336606557c59312
        }
    }

    public function menu() {
        $dataMenu = Barang::all();
        return view('user.menu', [
            "title" => 'List Menu'
        ], compact('dataMenu'));
    }

    public function userManagement(Request $request) {
        if($request->has('search')) {
            $dataUser = User::where('name', 'LIKE', '%'.$request->search.'%')
            ->orWhere('email', 'LIKE', '%'.$request->search.'%')
            ->paginate(10);
        }else {
            $dataUser = User::paginate(10);
        }
        return view('admin.user-management', [
            "title" => 'User Management'
        ], compact('dataUser'));
    }

    public function delete($id) {
        $roleUser = User::find($id);
        $roleUser->delete();
        return redirect()->route('user.role')->with('success', 'Data berhasil dihapus');
    }

    public function trash() {
        $trashesUser = User::onlyTrashed()->paginate(10);
        return view('admin.restore-user', [
            "title" => 'Restore User'
        ], compact('trashesUser'));
    }

    public function restore($id) {
        $restoreUser = User::onlyTrashed()->where('id', $id);
        $restoreUser->restore();
        return redirect()->back()->with('toast_success', 'Data user berhasil di kemabalikan');
    }

    public function restoreAll()
    {
        $restoreAll = User::onlyTrashed();
        $restoreAll->restore();
        return redirect()->route('user.role')->with('toast_success', 'Semua data user berhasil di kemabalikan');
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
        return view('agen', [
            "title" => 'Agen & Pelayan'
        ], compact('data'));
    }

    public function viewagen()
    {
        $data = agen::all();
        return view('admin.agen.index', [
            "title" => 'Agen & Pelayan'
        ], compact('data'));
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

        return view('admin.agen.updateagen', [
            "title" => 'Update Agen & Pelayan'
        ], compact('data'));

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

            return redirect('viewagen')->with('success', 'Profil Berhasil di update');

    }

    public function addagen()
    {
        return view('admin.agen.add', [
            "title" => "Tambah Agen & Pelayan"
        ]);
    }

        // Class deleteagen
        public function deleteagen($id)
        {
            $data = agen::find($id);

            $data->delete();

            return redirect('viewagen')->with('success', 'Berhasil Menghapus Orang');
        }

    // Class     contact
    public function contact()
    {
        return view('contactus', [
            "title" => 'Contact Us'
        ]);
    }

    // class reservation
    public function reservation(Request $request)
    {
       $request->validate([
        'name' => 'required',
        'email' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
        'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
        'guest' => 'required',
        'date' => 'required',
        'time' => 'required',
        'message' => 'required',
       ]);

       $reservation = new Reservation();
       $reservation->name = $request->name;
       $reservation->email = $request->email;
       $reservation->phone = $request->phone;
       $reservation->guest = $request->guest;
       $reservation->date = $request->date;
       $reservation->time = $request->time;
       $reservation->message = $request->message;

       $reservation->save();
       return redirect()->route('reservation')->with('toast_success', 'Your data has been saved');
    }

    // class viewreservation
    public function viewreservation()
    {
        $data = reservation::all();

        return view('admin.viewreservation', [
            "title" => "Reservation"
        ], compact('data'));
    }

    public function upload($id) {
        $dataPesan = Pesanan::find($id);
        return view('user.upload', [
            "title" => 'Upload Gambar'
        ], compact('dataPesan'));
    }

    public function uploadProcess(Request $request, $id) {
        // dd($request);
        $request->validate([
            'gambar' => 'required',
        ]);

        $dataPesanan = Pesanan::where('id', $id)->first();

        if($request->hasFile('gambar')) {
            $request->file('gambar')->move('productimage/', $request->file('gambar')->getClientOriginalName());
            $dataPesanan->gambar = $request->file('gambar')->getClientOriginalName();
            $dataPesanan->status = 2;
            $dataPesanan->update();
        }
        
        return redirect()->route('history.detail')->with('toast_success', 'Gambar sudah berhasil dikirim');
    }
<<<<<<< HEAD

    }

=======
}
>>>>>>> 77294b50d93d62eaae8de367ddaead906795e5d5
