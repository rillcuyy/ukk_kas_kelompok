<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kas extends Model
{
    protected $table = 'kas';
    protected $fillable = 
    ['nama',
    'keterangan',
    'jenis',
    'jumlah',];
}
