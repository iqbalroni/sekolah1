<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Brand extends Model
{
    public function ShowDB()
    {
        return DB::table('brand')->get();
    }

    public function Detail($id){
        return DB::table('brand')->where('id_brand', $id)->first();
    }

    public function AddBrand($data){
        DB::table('brand')->insert($data);
    }

    public function DeleteBrand($id){
        DB::table('brand')->where('id_brand', '=', $id)->delete();
    }

    public function UpdateBrand($id,$data){
        DB::table('brand')
            ->where('id_brand', $id)
            ->update($data);
    }
}
