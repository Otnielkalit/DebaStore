<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.AboutUs.index', [
            'aboutuss' => AboutUs::all()
        ], [
            "title" => 'About Us'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.AboutUs.add', [
            "title" => "Add About Us"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $aboutus = AboutUs::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar,
            'link' => $request->link,
        ]);

        if($request->hasFile('gambar')) {
            $request->file('gambar')->move('aboutusimage/', $request->file('gambar')->getClientOriginalName());
            $aboutus->gambar = $request->file('gambar')->getClientOriginalName();
            $aboutus->save();
        }

        return redirect()->route('aboutus')->with('toast_success', 'Data berhasil ditambahkan');
    }
        // $validatedData = $request->validate([
        //     'judul' => 'required',
        //     'deskripsi' => 'required',
        //     'gambar' => 'required',
        //     'link' => 'required'
        // ]);

        // AboutUs::create($validatedData);

        // return redirect('/aboutus')->with('success', 'Jadwal telah ditambahkan');

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */

    public function edit($id) {
        $dataAboutUsUpdate = AboutUs::find($id);
        return view('admin.AboutUs.edit', [
            "title" => "Edit About Us"
        ], compact('dataAboutUsUpdate'));
    }

    public function update(Request $request, $id) {
        $data = AboutUs::find($id);
        $image = $request->gambar;

        $imagename = $image->getClientOriginalName();

            $request->gambar->move('productimage/', $imagename);

            $data->gambar=$imagename;

            $data->nama_barang=$request->nama_barang;

            $data->harga=$request->harga;

            $data->keterangan=$request->keterangan;

            $data->stok=$request->stok;

            $data->save();

            return redirect()->route('menu')->with('toast_success', 'Menu berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutus = AboutUs::find($id);
        $aboutus->delete();
        return redirect('aboutus')->with('toast_success', 'Data berhasil dihapus');
    }

    public function indexuser()
    {
        return view('user.AboutUs.index', [
            'aboutuss' => AboutUs::all(),
            "title" => 'About Us'
        ]);
    }

    // public function slideSatu()
    // {
    //     $aboutus = AboutUs::find(1);
    //     return $aboutus->gambar;
    // }

}
