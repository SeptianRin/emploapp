<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $fillable =[
        'empid',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tanggal_masuk',
        'gaji',
    ];
}
