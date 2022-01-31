<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use SweetAlert;

class ContactController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->Contact = new Contact;
    }

    public function index(){
        $data = [
            'data' => $this->Contact->ShowDB(),
        ];
        return view('contact.contact',$data);
    }

    public function delete($id){

        $this->Contact->DeleteContact($id);

        alert()->success('Berhasil Di Hapus!', 'Success');

        return redirect()->route('kontak');
    }
}
