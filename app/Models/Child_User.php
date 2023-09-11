<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child_User extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'child_users';
    protected $guarded = ['id'];
}
