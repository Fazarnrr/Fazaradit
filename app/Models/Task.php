<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable=[
        "code",
        "institusi",
        "project" 
       ];
    
       public function cobas()
       {
        return $this->belongsTo(Coba::class,'name');
       }
    
}
