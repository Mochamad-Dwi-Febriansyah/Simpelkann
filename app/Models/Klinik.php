<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klinik extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'kliniks';
    protected $guarded = ['id'];
    public function regional()
    {
        return $this->belongsTo(Regional::class);
    }
}