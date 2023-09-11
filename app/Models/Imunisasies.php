<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imunisasies extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'imunisasies';
    protected $guarded = ['id'];
}
