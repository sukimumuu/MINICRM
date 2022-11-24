<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'firstname',
        'lastname',
        'company',
        'email',
        'phone',
        'gender',
        'hobbies'
    ];

    public function companies(){  
        return $this->belongsTo(Companies::class,'company', 'id');
    }
}
