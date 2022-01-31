<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AgendaModel extends Model
{
    public function ShowDB()
    {
        return DB::table('agenda')->get();
    }

    public function Detail($id){
        return DB::table('agenda')->where('id_agenda', $id)->first();
    }

    public function AddAgenda($data){
        DB::table('agenda')->insert($data);
    }

    public function DeleteAgenda($id){
        DB::table('agenda')->where('id_agenda', '=', $id)->delete();
    }

    public function UpdateAgenda($id,$data){
        DB::table('agenda')
            ->where('id_agenda', $id)
            ->update($data);
    }
}
