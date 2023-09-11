<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medis_Identitas extends Model
{
    public $timestamps = false;
    protected $table = 'medis_identitas';
    protected $guarded = ['id'];
}