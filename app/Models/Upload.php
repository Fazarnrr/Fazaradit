<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;

    protected $fillable =[
        "nama_client",
        "nama_project",
        "hps",
        "nama_sales",
        "jenis_dokumen",
        "upload_dokumen",
        "sign_tec"
    ];
}


