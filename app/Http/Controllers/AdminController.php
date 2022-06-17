<?php

namespace App\Http\Controllers;
use App\Model\Agen;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewagen()
    {
        return view('admin.agen.index');
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
}
