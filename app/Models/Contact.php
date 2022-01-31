<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contact extends Model
{
    public function ShowDB()
    {
        return DB::table('contact')
        ->orderBy('id_contact','desc')
        ->get();
    }

    public function Detail($id){
        return DB::table('contact')->where('id_contact', $id)->first();
    }

    public function AddContact($data){
        DB::table('contact')->insert($data);
    }

    public function DeleteContact($id){
        DB::table('contact')->where('id_contact', '=', $id)->delete();
    }

    public function UpdateContact($id,$data){
        DB::table('contact')
            ->where('id_contact', $id)
            ->update($data);
    }
}
