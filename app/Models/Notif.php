<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notif extends Model
{
    use HasFactory;
    protected $table = 'notifikasi';
    public $fillable = [
        "id",
        "user_id",
        "title",
        "desc"
    ];
    public $timestamps = false;

    public function users()
    {
        return $this->belongsTo(\App\Models\Roles::class, 'user_id');

    }
}