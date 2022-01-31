<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Pengguna;

use SweetAlert;

class PenggunaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->Pengguna = new Pengguna;
    }

    public function index(){
        $data = [
            'show' => $this->Pengguna->ShowDB(), 
        ];
        return view('user.pengguna',$data);
    }

    public function add(){
        return view('user.addpengguna');
    }

    public function save(){
        request()->validate([
            'name' => 'required|unique:users,name',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|min:8|same:password',
        ],[
            'name.required' => 'Nama wajib diisi',
            'name.unique' => 'Nama sudah ada',
            'email.required' => 'email wajib diisi',
            'email.unique' => 'email sudah ada',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password Minimal 8',
            'password_confirmation' => 'Password Minimal 8',
            'password_confirmation' => 'Password wajib diisi',
            'password_confirmation.same' => 'konfirmasi password salah',
        ]);

        $savepassword = Hash::make(Request()->password);

        $data = [
            'name' => Request()->name,
            'email' => Request()->email,
            'password' => $savepassword,
        ];

        $this->Pengguna->AddUsers($data);

        alert()->success('Berhasil Di tambahkan!', 'Success');

        return redirect()->route('pengguna');
    }

    public function delete($id){
        $this->Pengguna->DeleteUsers($id);

        alert()->success('Berhasil Di hapus!', 'Success');

        return redirect()->route('pengguna');
    }

    public function edit($id){
        $data = [
            'detail' => $this->Pengguna->Detail($id),
        ];

        return view('user.editpengguna',$data);
    }

    public function update($id){
        request()->validate([
            'name' => 'required',
            'email' => 'required',
        ],[
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'email wajib diisi',
        ]);

        $data = [
            'name' => Request()->name,
            'email' => Request()->email,
        ];

        $this->Pengguna->UpdateUsers($id,$data);

        alert()->success('Berhasil Di edit!', 'Success');

        return redirect()->route('pengguna');
        
    }
}
