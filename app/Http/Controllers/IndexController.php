<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerModel;
use App\Models\Video;
use App\Models\Domain;
use App\Models\AgendaModel;
use App\Models\komentar;
use App\Models\Brand;
use App\Models\Contact;
use App\Models\Berita;
use Illuminate\Support\Facades\DB;  

use SweetAlert;

class IndexController extends Controller
{
    public function __construct(){
        $this->BannerModel = new BannerModel;
        $this->Domain = new Domain;
        $this->Video = new Video;
        $this->AgendaModel = new AgendaModel;
        $this->komentar = new komentar;
        $this->Brand = new Brand;
        $this->Contact = new Contact;
        $this->Berita = new Berita;
    }

    public function index(){
        $data = [
            'banner' => $this->BannerModel->ShowDB(),
            'flexbanner' => $this->BannerModel->FlexDB(),
            'domain' => $this->Domain->ShowDB(),
            'youtube' => $this->Video->ShowDB(),
            'agenda' => $this->AgendaModel->ShowDB(),
            'komentar' => $this->komentar->ShowDB(),
            'brand' => $this->Brand->ShowDB(),
        ];
        return view('index',$data);
    }

    public function komen(){
        return view('comment');
    }

    public function save(){
        request()->validate([
            'profesi' => 'required',
            'pesan' => 'required',
            'nama' => 'required|unique:komentar,nama',
            'foto' => 'required|mimes:jpg,jpeg,png|max:500',
        ],[
            'nama.required' => 'Nama Wajib Diisi',
            'profesi.required' => 'profesi Wajib Diisi',
            'nama.unique' => 'Hanya Boleh Mengisi satu kali',
            'pesan.required' => 'Komentar wajib diisi',
            'foto.required' => 'foto wajib diisi',
            'foto.mimes' => 'Foto yang di perbolehkan hanya jpg,jpeg,png',
            'foto.max' => 'Foto Maximal 500kb',
        ]);

        $file = Request()->foto;
        $namefile = Request()->nama.'.'.$file->extension();
        $file->move(public_path('../../alumni'),$namefile);

        $data = [
            'nama' => Request()->nama,
            'profesi' => Request()->profesi,
            'foto' => $namefile,
            'pesan' => Request()->pesan,
            'status' => 1,
        ];

        $this->komentar->AddKomentar($data);

        alert()->success('Tunggu Konfirmasi Dari Admin!', 'Success');

        return redirect()->route('frontend');
    }

    public function contact(){
        request()->validate([
            'nama' => 'required',
            'no_telp' => 'required',
            'pesan' => 'required',
        ],[
            'nama.required' => 'Nama Wajib Diisi',
            'no_telp.required' => 'no telp Wajib Diisi',
            'pesan.required' => 'pesan Wajib Diisi',
        ]);

        $data = [
            'nama' => Request()->nama,
            'no_telp' => Request()->no_telp,
            'pesan' => Request()->pesan,
        ];

        $this->Contact->AddContact($data);

        alert()->success('Berhasil Terkirim!', 'Success');

        return redirect()->route('frontend');
    }

    public function terkini(Request $request){


        if($request->has('cari')){
            $data = [
                'berita' => $this->Berita->SearchDB($request),
            ];
        }else{
            $data = [
                'berita' => $this->Berita->FlexDB(),
            ];
        }
        return view('blog',$data);
    }

    public function ShowBerita($judul){
        $data = [
            'berita' => $this->Berita->Show($judul),
        ];
        return view('showblog',$data);
    }
}
