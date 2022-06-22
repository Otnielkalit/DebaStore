<?php

namespace App\Http\Controllers;
use App\Models\Galeri;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{

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
        ]);

        if($request->hasFile('gambar')) {
            $request->file('gambar')->move('aboutusimage/', $request->file('gambar')->getClientOriginalName());
            $aboutus->gambar = $request->file('gambar')->getClientOriginalName();
            $aboutus->save();
        }

        return redirect()->route('aboutus')->with('toast_success', 'Data berhasil ditambahkan');
    }

    public function edit($id) {
        $dataAboutUsUpdate = AboutUs::find($id);
        return view('admin.AboutUs.edit', [
            "title" => "Edit About Us"
        ], compact('dataAboutUsUpdate'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($files = $request->file('gambar')) {
            $destinationPath = 'aboutusimage/'; // upload path
            $aboutusimage = date('YmdHis') . "." . $files->getClientOriginalName();
            $files->move($destinationPath, $aboutusimage);
            $update['gambar'] = "$aboutusimage";
            }
            $update['judul'] = $request->get('judul');
            $update['deskripsi'] = $request->get('deskripsi');
            AboutUs::where('id',$id)->update($update);
        return redirect()->route('aboutus')->with('toast_success','Sukses meng-update about us');
    }

    public function destroy($id)
    {
        $aboutus = AboutUs::find($id);
        $aboutus->delete();
        return redirect('aboutus')->with('toast_success', 'Data berhasil dihapus');
    }

    public function indexuser()
    {
        $aboutUsUser = AboutUs::all()->sortByDesc('updated_at');
        return view('user.AboutUs.index', compact('aboutUsUser'));

    }



    // CLASS FOR GALERI
    public function viewgaleri()
    {
        $galeri = galeri::all();
        return view('admin.galeri.index',[
            "title" => 'Galeri'
        ], compact('galeri'));
    }

    public function addgaleri()
    {
        return view('admin.galeri.addgaleri',[
            "title" => 'Add Galeri']);
    }


    public function galeriadd(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $galeri = galeri::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $request->gambar,
        ]);

        if($request->hasFile('image')) {
            $request->file('image')->move('galeriimage/', $request->file('image')->getClientOriginalName());
            $galeri->image = $request->file('image')->getClientOriginalName();
            $galeri->save();
        }

        return redirect()->route('galeri')->with('toast_success', 'Data berhasil ditambahkan');
    }

    public function galeriedit($id)
    {
        return view('admin.galeri.editgaleri',[
            "title" => 'Edit Galeri']);
    }

        // Class editgaleri
        public function editgaleri(Request $request, $id)
        {
            $galeri = Galeri::find($id);

            $image = $request->image;

            if($image){

                $imagename = time().'.'.$image->getClientOriginalExtension();

                $request->image->move('galeriimage', $imagename);

                $galeri->image=$imagename;
            }

                $galeri->name=$request->title;

                $galeri->speciality=$request->description;

                $galeri->save();

                return redirect('galeri')->with('success', 'Galeri Berhasil di update');

        }


    // Class deleteagen
    public function deletegaleri($id)
    {
        $data = Galeri::find($id);

        $data->delete();

        return redirect('galeri')->with('success', 'Berhasil Menghapus Galeri');
    }
}
