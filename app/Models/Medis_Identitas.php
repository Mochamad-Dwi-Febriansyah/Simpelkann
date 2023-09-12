<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medis_Identitas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'medis_identitas';
    protected $guarded = ['id'];
    public function klinik()
    {
        return $this->belongsTo(Klinik::class);
    }
    public function medis()
    {
        return $this->belongsTo(Medis::class);
    }
}