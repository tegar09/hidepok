<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tpu extends Model
{
    protected $table = 'tpus';

    protected $primaryKey ='id_tpu';

    protected $fillable = [
    	'nama_tempat', 'gambaran_umum', 'alamat', 'no_telp',
    	'jam_operasional', 'koordinat', 'kecamatan',
    	'website', 'foto', 'sumber', 'id_data'
    ];

    public $timestamps =false;
}
