<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use SweetAlert;

class BrandController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->Brand = new Brand;
    }
    public function index(){
        $data =[
            'Show' => $this->Brand->ShowDB()
        ];
        return view('brand.brand',$data);
    }

    public function add(){
        return view('brand.addbrand');
    }

    public function save(){
        request()->validate([
            'nama' => 'required|unique:brand,nama',
            'foto' => 'required|mimes:png',
        ],[
            'nama.required' => 'nama wajib diisi',
            'nama.unique' => 'nama sudah ada',
            'foto.required' => 'foto wajib diisi',
            'foto.mimes' => 'Foto yang di perbolehkan hanya png',
        ]);

        $file = Request()->foto;
        $namefile = Request()->nama.'.'.$file->extension();
        $file->move(public_path('../../brand'),$namefile);

        $data = [
            'nama' => Request()->nama,
            'foto' => $namefile,
        ];

        $this->Brand->AddBrand($data);

        alert()->success('Berhasil Di Tambahkan!', 'Success');

        return redirect()->route('support');
    }

    public function delete($id){
        $data = $this->Brand->Detail($id);

        if(!$data->foto == ""){
            unlink(public_path('../../brand/').$data->foto);
        }

        $this->Brand->DeleteBrand($id);

        alert()->success('Berhasil Di Hapus!', 'Success');

        return redirect()->route('support');
    }

    public function edit($id){
        $data = [
            'Show' => $this->Brand->Detail($id),
        ];

        return view('brand.editbrand',$data);
    }

    public function update($id){
        request()->validate([
            'nama' => 'required',
            'foto' => 'mimes:png',
        ],[
            'nama.required' => 'nama wajib diisi',
            'foto.mimes' => 'Foto yang di perbolehkan hanya png',
        ]);

        if(Request()->foto == ""){
            $data = [
                'nama' => Request()->nama,
            ];

            $this->Brand->UpdateBrand($id,$data);
        }else{

            $file = Request()->foto;
            $namefile = Request()->nama.'.'.$file->extension();
            $file->move(public_path('../../brand'),$namefile);

            $data = [
                'nama' => Request()->nama,
                'foto' => $namefile,
            ];

            $this->Brand->UpdateBrand($id,$data);
        }

        alert()->success('Berhasil Di Edit!', 'Success');

        return redirect()->route('support');
    }
}
