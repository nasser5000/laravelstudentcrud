<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table="students";
    protected $fillable = [
        'id','studentname','studentmail','studentphone','created_at','updated_at'
    ];
}
