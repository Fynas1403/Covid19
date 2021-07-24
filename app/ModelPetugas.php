<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPetugas extends Model
{
    protected $table="petugas";
    //default primary key adalah id
    protected $primarykey="id_petugas";
    //untuk mematikan pengotomatisan insert kolom update at
    public $timestamps=false;

    protected $fillable = [
      'id_petugas',
      'nama_petugas',
      'username',
      'password',
      'telp',
      'level'
    ];
}
