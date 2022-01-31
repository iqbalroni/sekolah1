<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pengguna extends Model
{
    public function ShowDB()
    {
        return DB::table('users')->get();
    }

    public function Detail($id){
        return DB::table('users')->where('id', $id)->first();
    }

    public function AddUsers($data){
        DB::table('users')->insert($data);
    }

    public function DeleteUsers($id){
        DB::table('users')->where('id', '=', $id)->delete();
    }

    public function UpdateUsers($id,$data){
        DB::table('users')
            ->where('id', $id)
            ->update($data);
    }
}
