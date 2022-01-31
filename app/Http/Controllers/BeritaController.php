<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use SweetAlert;

class BeritaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->Berita = new Berita;
    }

    public function index(){
        $data = [
            'show' => $this->Berita->ShowDB(),
        ];
        return view('berita.berita',$data);
    }

    public function add(){
        return view('berita.addberita');
    }

    public function save(){
        request()->validate([
            'judul' => 'required|unique:banner,judul',
            'isi' => 'required',
            'gambar' => 'required',
            'gambar' => 'mimes:jpg,jpeg,png',
        ],[
            'judul.required' => 'Judul wajib diisi',
            'judul.unique' => 'Judul sudah ada',
            'isi.required' => 'isi wajib diisi',
            'gambar.required' => 'Gambar wajib diisi',
            'gambar.mimes' => 'Foto yang di perbolehkan hanya jpg,jpeg,png',
        ]);

        $file = Request()->gambar;
        $namefile = Request()->judul.'.'.$file->extension();
        $file->move(public_path('../../blog'),$namefile);

        $data = [
            'judul_berita' => Request()->judul,
            'pengupload' => Request()->pengupload,
            'tanggal_upload' => Date('Y-m-d'),
            'isi' => Request()->isi,
            'gambar' => $namefile,
        ];

        $this->Berita->Addberita($data);

        alert()->success('Berhasil Di Tambahkan!', 'Success');

        return redirect()->route('berita');
    }

    public function edit($id){
        $data = [
            'Show' => $this->Berita->Detail($id),
        ];
        return view('berita.editberita',$data);
    }

    public function update($id){
        request()->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'mimes:jpg,jpeg,png',
        ],[
            'judul.required' => 'Judul wajib diisi',
            'isi.required' => 'isi wajib diisi',
            'gambar.mimes' => 'Foto yang di perbolehkan hanya jpg,jpeg,png',
        ]);

        if(Request()->gambar == ""){
            $data = [
                'judul_berita' => Request()->judul,
                'pengupload' => Request()->pengupload,
                'isi' => Request()->isi,
            ];

            $this->Berita->Updateberita($id,$data);
        }else{

            $file = Request()->gambar;
            $namefile = Request()->judul.'.'.$file->extension();
            $file->move(public_path('../../blog'),$namefile);

            $data = [
                'judul_berita' => Request()->judul,
                'pengupload' => Request()->pengupload,
                'isi' => Request()->isi,
                'gambar' => $namefile,
            ];

            $this->Berita->Updateberita($id,$data);
        }

        alert()->success('Berhasil Di Edit!', 'Success');

        return redirect()->route('berita');
    }

    public function delete($id){
        $data = $this->Berita->Detail($id);

        if(!$data->gambar == ""){
            unlink(public_path('../../blog/').$data->gambar);
        }

        $this->Berita->Deleteberita($id);

        alert()->success('Berhasil Di Hapus!', 'Success');

        return redirect()->route('berita');
    }
}
