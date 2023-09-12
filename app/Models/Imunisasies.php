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
    public function child_users(){
        return $this->belongsTo(Child_User::class);
    }
    public function klinik(){
        return $this->belongsTo(Klinik::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
