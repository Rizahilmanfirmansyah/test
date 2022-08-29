<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kartu extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "kartu";
    protected $fillable = [
        'nomorkartu', 'nama','alamat','lahir','nik','fasilitas'

    ];
}
