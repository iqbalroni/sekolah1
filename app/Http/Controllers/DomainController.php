<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;
use SweetAlert;

class DomainController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->Domain = new Domain;
    }

    public function index(){
        $data = [
            'data' => $this->Domain->ShowDB(),
        ];
        return view('domain.domain',$data);
    }

    public function add(){
        return view('domain.adddomain');
    }

    public function save(){
        request()->validate([
            'judul' => 'required|unique:domain,judul',
            'link' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg',
        ],[
            'judul.required' => 'Judul wajib diisi',
            'judul.unique' => 'Judul sudah ada',
            'link.required' => 'link wajib diisi',
            'gambar.required' => 'gambar wajib diisi',
            'gambar.mimes' => 'Foto yang di perbolehkan hanya jpg,jpeg',
        ]);

        $file = Request()->gambar;
        $namefile = Request()->judul.'.'.$file->extension();
        $file->move(public_path('../../domain'),$namefile);

        $data = [
            'judul' => Request()->judul,
            'link' => Request()->link,
            'foto' => $namefile,
        ];

        $this->Domain->AddDomain($data);

        alert()->success('Berhasil Di Tambahkan!', 'Success');

        return redirect()->route('domain');
    }

    public function delete($id){
        $data = $this->Domain->Detail($id);

        if(!$data->foto == ""){
            unlink(public_path('../../domain/').$data->foto);
        }

        $this->Domain->DeleteDomain($id);

        alert()->success('Berhasil Di Hapus!', 'Success');

        return redirect()->route('domain');
    }

    public function edit($id){
        $data = [
            'Show' => $this->Domain->Detail($id),
        ];

        return view('domain.editdomain',$data);
    }

    public function update($id){
        request()->validate([
            'judul' => 'required',
            'link' => 'required',
            'gambar' => 'mimes:jpg,jpeg,png',
        ],[
            'judul.required' => 'Judul wajib diisi',
            'link.required' => 'link wajib diisi',
            'gambar.mimes' => 'Foto yang di perbolehkan hanya jpg,jpeg,png',
        ]);

        if(Request()->gambar == ""){
            $data = [
                'judul' => Request()->judul,
                'link' => Request()->link,
            ];

            $this->Domain->UpdateDomain($id,$data);
        }else{
            $file = Request()->gambar;
            $namefile = Request()->judul.'.'.$file->extension();
            $file->move(public_path('../../domain'),$namefile);

            $data = [
                'judul' => Request()->judul,
                'link' => Request()->link,
                'foto' => $namefile,
            ];

            $this->Domain->UpdateDomain($id,$data);
        }

        alert()->success('Berhasil Di Edit!', 'Success');

        return redirect()->route('domain');
    }
}
