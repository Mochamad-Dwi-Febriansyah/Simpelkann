<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'regionals';
    protected $guarded = ['id'];
    public function regional()
    {
        return $this->belongsTo(Regional::class);
    }
}
