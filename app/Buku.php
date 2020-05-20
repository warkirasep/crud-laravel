<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //
    protected $fillable = [
    	'code',
    	'judul',
    	'penulis',
    	'tgl_terbit'
    ];
}
