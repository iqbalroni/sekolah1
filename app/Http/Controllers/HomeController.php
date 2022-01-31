<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use App\Models\BannerModel;
use App\Models\Domain;
use App\Models\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->Pengguna = new Pengguna;
        $this->BannerModel = new BannerModel;
        $this->Domain = new Domain;
        $this->Contact = new Contact;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'pengguna' => $this->Pengguna->ShowDB(),
            'banner' => $this->BannerModel->ShowDB(),
            'domain' => $this->Domain->ShowDB(),
            'contact' => $this->Contact->ShowDB(),
        ];
        return view('dashboard',$data);
    }
}
