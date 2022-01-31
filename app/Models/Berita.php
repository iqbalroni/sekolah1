<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Berita extends Model
{
    public function ShowDB()
    {
        return DB::table('berita')->get();
    }

    public function FlexDB()
    {
        return DB::table('berita')
        ->orderBy('id_berita','desc')
        ->get();
    }

    public function SearchDB($request){
        return DB::table('berita')
        ->where('judul_berita', 'LIKE', '%'.$request->cari.'%')
        ->get();
    }

    public function Detail($id){
        return DB::table('berita')->where('id_berita', $id)->first();
    }

    public function Show($judul){
        return DB::table('berita')->where('judul_berita', $judul)->first();
    }

    public function Addberita($data){
        DB::table('berita')->insert($data);
    }

    public function Deleteberita($id){
        DB::table('berita')->where('id_berita', '=', $id)->delete();
    }

    public function Updateberita($id,$data){
        DB::table('berita')
            ->where('id_berita', $id)
            ->update($data);
    }
}
