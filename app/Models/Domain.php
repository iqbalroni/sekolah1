<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Domain extends Model
{
    public function ShowDB()
    {
        return DB::table('domain')->get();
    }

    public function Detail($id){
        return DB::table('domain')->where('id_domain', $id)->first();
    }

    public function AddDomain($data){
        DB::table('domain')->insert($data);
    }

    public function DeleteDomain($id){
        DB::table('domain')->where('id_domain', '=', $id)->delete();
    }

    public function UpdateDomain($id,$data){
        DB::table('domain')
            ->where('id_domain', $id)
            ->update($data);
    }
}
