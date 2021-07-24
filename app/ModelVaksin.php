<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VaksinModel extends Model
{
    protected $table="daftar_vaksin";
    //default primary key adalah id
    protected $primarykey="id_vaksin";
    //untuk mematikan pengotomatisan insert kolom update at
    public $timestamps=false;

    protected $fillable = [
      'id_vaksin',
      'nik',
      'tgl_vaksin',
      'jenis_vaksin',
      'vaksin_ke'
    ];
}
