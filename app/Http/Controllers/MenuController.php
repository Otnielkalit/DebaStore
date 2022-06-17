<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MenuController extends Controller
{
    public function index() {
        $dataMenu = Barang::all();
        return view('admin.menu.index', compact('dataMenu'));
    }

    public function menu() {
        return view('admin.menu.add');
    }

    public function store(Request $request) {
        $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required',
            'keterangan' => 'required',
            'stok' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $menu = Barang::create([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,
            'stok' => $request->stok,
            'gambar' => $request->gambar,
        ]);

        if($request->hasFile('gambar')) {
            $request->file('gambar')->move('productimage/', $request->file('gambar')->getClientOriginalName());
            $menu->gambar = $request->file('gambar')->getClientOriginalName();
            $menu->save();
        }

        return redirect()->route('menu')->with('toast_success', 'Menu berhasil ditambahkan');
    }

    public function getUpdate($id) {
        $dataMenuUpdate = Barang::find($id);
        return view('admin.menu.edit', compact('dataMenuUpdate'));
    }

    public function update(Request $request, $id) {
        $data = Barang::find($id);
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

    public function delete($id) {
        $data = Barang::find($id);
        $data->delete();
        return redirect()->route('menu')->with('toast_success', 'Data berhasil dihapus');
    }
}
