<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Video extends Model
{
    public function ShowDB()
    {
        return DB::table('video')->get();
    }

    public function Detail($id){
        return DB::table('video')->where('id_video', $id)->first();
    }

    public function UpdateVideo($id,$data){
        DB::table('video')
            ->where('id_video', $id)
            ->update($data);
    }
}
