<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgendaModel;
use SweetAlert;

class AgendaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->AgendaModel = new AgendaModel;
    }
    public function index(){
        $data = [
            'show' => $this->AgendaModel->ShowDB(),
        ];
        return view('agenda.agenda',$data);
    }

    public function add(){
        return view('agenda.addagenda');
    }

    public function save(){
        request()->validate([
            'kegiatan' => 'required|unique:agenda,kegiatan',
            'tanggal' => 'required',
        ],[
            'kegiatan.required' => 'Kegiatan wajib diisi',
            'kegiatan.unique' => 'Kegiatan sudah ada',
            'tanggal.required' => 'Tanggal wajib diisi',
        ]);

        $data = [
            'kegiatan' => Request()->kegiatan,
            'tanggal' => Request()->tanggal,
        ];

        $this->AgendaModel->AddAgenda($data);

        alert()->success('Berhasil Di Tambahkan!', 'Success');

        return redirect()->route('agenda');
    }

    public function delete($id){
        $this->AgendaModel->DeleteAgenda($id);

        alert()->success('Berhasil Di Hapus!', 'Success');

        return redirect()->route('agenda');
    }

    public function edit($id){
        $data = [
            'Show' => $this->AgendaModel->Detail($id),
        ];
        return view('agenda.editagenda',$data);
    }

    public function update($id){
        request()->validate([
            'kegiatan' => 'required',
            'tanggal' => 'required',
        ],[
            'kegiatan.required' => 'Kegiatan wajib diisi',
            'tanggal.required' => 'Tanggal wajib diisi',
        ]);

        $data = [
            'kegiatan' => Request()->kegiatan,
            'tanggal' => Request()->tanggal,
        ];

        $this->AgendaModel->UpdateAgenda($id,$data);

        alert()->success('Berhasil Di Edit!', 'Success');

        return redirect()->route('agenda');
    }
}
