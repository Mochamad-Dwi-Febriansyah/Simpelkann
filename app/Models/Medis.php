<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

class Medis extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'medis';
    protected $guarded = ['id'];
}
