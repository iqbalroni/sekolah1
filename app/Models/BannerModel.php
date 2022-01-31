<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BannerModel extends Model
{
    public function ShowDB()
    {
        return DB::table('banner')
        ->orderBy('id_banner','desc')
        ->get();
    }

    public function FlexDB()
    {
        return DB::table('banner')
        ->get();
    }

    public function Detail($id){
        return DB::table('banner')->where('id_banner', $id)->first();
    }

    public function AddBanner($data){
        DB::table('banner')->insert($data);
    }

    public function DeleteBanner($id){
        DB::table('banner')->where('id_banner', '=', $id)->delete();
    }

    public function UpdateBanner($id,$data){
        DB::table('banner')
            ->where('id_banner', $id)
            ->update($data);
    }
}
