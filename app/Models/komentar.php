<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class komentar extends Model
{
    public function DescDB()
    {
        return DB::table('komentar')
        ->orderBy('id_komentar','desc')
        ->get();
    }

    public function ShowDB()
    {
        return DB::table('komentar')->get();
    }

    public function Detail($id){
        return DB::table('komentar')->where('id_komentar', $id)->first();
    }

    public function AddKomentar($data){
        DB::table('komentar')->insert($data);
    }

    public function DeleteKomentar($id){
        DB::table('komentar')->where('id_komentar', '=', $id)->delete();
    }

    public function UpdateKomentar($id,$data){
        DB::table('komentar')
            ->where('id_komentar', $id)
            ->update($data);
    }
}
