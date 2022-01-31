<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use SweetAlert;

class VideoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->Video = new Video;
    }

    public function index(){
        $data = [
            'data' => $this->Video->ShowDB(),
        ];
        return view('video.video',$data);
    }

    public function edit($id){

        $data = [
            'Detail' => $this->Video->Detail($id),
        ];

        return view('video.editvideo',$data);
    }

    public function update($id){
        request()->validate([
            'judul' => 'required',
            'link' => 'required',
        ],[
            'judul.required' => 'Judul wajib diisi',
            'link.required' => 'Link wajib diisi',
        ]);

        $data = [
            'judul' => Request()->judul,
            'link' => Request()->link,
        ];

        $this->Video->UpdateVideo($id,$data);

        alert()->success('Berhasil Di Edit!', 'Success');

        return redirect()->route('video');
    }
}
