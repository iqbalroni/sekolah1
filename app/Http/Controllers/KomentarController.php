<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\komentar;
use SweetAlert;

class KomentarController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->komentar = new komentar;
    }

    public function index(){
        $data = [
            'komentar' => $this->komentar->DescDB(),
        ];
        return view('komentar.komentar',$data);
    }

    public function edit($id){
        $data = [
            'detail' => $this->komentar->Detail($id),
        ];

        return view('komentar.editkomentar',$data);
    }

    public function update($id){
        request()->validate([
            'profesi' => 'required',
            'pesan' => 'required',
            'nama' => 'required',
            'foto' => 'mimes:jpg,jpeg',
        ],[
            'nama.required' => 'Nama Wajib Diisi',
            'profesi.required' => 'profesi Wajib Diisi',
            'pesan.required' => 'Komentar wajib diisi',
            'foto.mimes' => 'Foto yang di perbolehkan hanya jpg,jpeg',
        ]);

        if(Request()->foto == ""){
            $data = [
                'nama' => Request()->nama,
                'profesi' => Request()->profesi,
                'pesan' => Request()->pesan,
            ];

            $this->komentar->UpdateKomentar($id,$data);

        }else{
            $file = Request()->foto;
            $namefile = Request()->nama.'.'.$file->extension();
            $file->move(public_path('../../alumni'),$namefile);

            $data = [
                'nama' => Request()->nama,
                'profesi' => Request()->profesi,
                'foto' => $namefile,
                'pesan' => Request()->pesan,
            ];

            $this->komentar->UpdateKomentar($id,$data);

        }

            alert()->success('Berhasil Di Edit!', 'Success');

            return redirect()->route('testimoni');
    }

    public function delete($id){
        $data = $this->komentar->Detail($id);

        if(!$data->foto == ""){
            unlink(public_path('../../alumni/').$data->foto);
        }

        $this->komentar->DeleteKomentar($id);

        alert()->success('Berhasil Di Hapus!', 'Success');

        return redirect()->route('testimoni');
    }

    public function on($id){
        $data = [
            'status' => '2',
        ];

        $this->komentar->UpdateKomentar($id,$data);

        alert()->success('Berhasil Di Aktifkan!', 'Success');

        return redirect()->route('testimoni');
    }

    public function off($id){
        $data = [
            'status' => '1',
        ];

        $this->komentar->UpdateKomentar($id,$data);

        alert()->success('Berhasil Di NonAktifkan!', 'Success');

        return redirect()->route('testimoni');
    }
}
