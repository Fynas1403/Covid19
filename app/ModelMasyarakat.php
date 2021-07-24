<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelMasyarakat extends Model
{
    protected $table="masyarakat";
    //default primary key adalah id
    protected $primarykey="nik";
    //untuk mematikan pengotomatisan insert kolom update at
    public $timestamps=false;

    protected $fillable = [
      'nik',
      'nama',
      'username',
      'password',
      'telp'
    ];
}
