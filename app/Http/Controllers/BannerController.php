<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerModel;
use SweetAlert;

class BannerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->BannerModel = new BannerModel;
    }

    public function index(){
        $data = [
            'banner' => $this->BannerModel->ShowDB(),
        ];
        return view('banner.banner',$data);
    }

    public function add(){
        return view('banner.addbanner');
    }

    public function save(){
        request()->validate([
            'judul' => 'required|unique:banner,judul',
            'deskripsi' => 'required',
            'gambar' => 'required',
            'gambar' => 'mimes:jpg,jpeg',
        ],[
            'judul.required' => 'Judul wajib diisi',
            'judul.unique' => 'Judul sudah ada',
            'deskripsi.required' => 'Deskripsi wajib diisi',
            'gambar.required' => 'Gambar wajib diisi',
            'gambar.mimes' => 'Foto yang di perbolehkan hanya jpg,jpeg',
        ]);

        $file = Request()->gambar;
        $namefile = Request()->judul.'.'.$file->extension();
        $file->move(public_path('../../banner'),$namefile);

        $data = [
            'judul' => Request()->judul,
            'artikel' => Request()->deskripsi,
            'gambar' => $namefile,
            'pengupload' => Request()->pengupload,
            'status' => 1,
        ];

        $this->BannerModel->AddBanner($data);

        alert()->success('Berhasil Di Tambahkan!', 'Success');

        return redirect()->route('homebanner');
    }

    public function delete($id){
        $data = $this->BannerModel->Detail($id);

        if(!$data->gambar == ""){
            unlink(public_path('../../banner/').$data->gambar);
        }

        $this->BannerModel->DeleteBanner($id);

        alert()->success('Berhasil Di Hapus!', 'Success');

        return redirect()->route('homebanner');
    }

    public function edit($id){
        $data = [
            'Show' => $this->BannerModel->Detail($id),
        ];
        return view('banner.editbanner',$data);
    }

    public function update($id){
        request()->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'mimes:jpg,jpeg',
        ],[
            'judul.required' => 'Judul wajib diisi',
            'judul.unique' => 'Judul sudah ada',
            'deskripsi.required' => 'Deskripsi wajib diisi',
            'gambar.mimes' => 'Foto yang di perbolehkan hanya jpg,jpeg',
        ]);

        if(Request()->gambar == ""){
            $data = [
                'judul' => Request()->judul,
                'artikel' => Request()->deskripsi,
                'pengupload' => Request()->pengupload,
            ];

            $this->BannerModel->UpdateBanner($id,$data);
        }else{

            $file = Request()->gambar;
            $namefile = Request()->judul.'.'.$file->extension();
            $file->move(public_path('../../banner'),$namefile);

            $data = [
                'judul' => Request()->judul,
                'artikel' => Request()->deskripsi,
                'gambar' => $namefile,
                'pengupload' => Request()->pengupload,
            ];

            $this->BannerModel->UpdateBanner($id,$data);
        }

        alert()->success('Berhasil Di Edit!', 'Success');

        return redirect()->route('homebanner');
    }

    public function on($id){
        $data = [
            'status' => '1',
        ];

        $this->BannerModel->UpdateBanner($id,$data);

        alert()->success('Berhasil Di Aktifkan!', 'Success');

        return redirect()->route('homebanner');
    }

    public function off($id){
        $data = [
            'status' => '2',
        ];

        $this->BannerModel->UpdateBanner($id,$data);

        alert()->success('Berhasil Di NonAktifkan!', 'Success');

        return redirect()->route('homebanner');
    }
}
