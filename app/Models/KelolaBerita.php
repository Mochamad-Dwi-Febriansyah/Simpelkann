<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelolaBerita extends Model
{
    use HasFactory;
    // public $timestamps = false;
    protected $table = 'kelola_beritas';
    protected $guarded = ['id'];
}
