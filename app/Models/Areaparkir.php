<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areaparkir extends Model
{
    use HasFactory;
    protected $table = 'areaparkir';
    protected $fillable = ['nama_area','jumlah_slot','alamat','kelurahan','kecamatan'];
}
