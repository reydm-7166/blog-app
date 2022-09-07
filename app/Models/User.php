<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'age', 'email_address', 'password', 'profile_picture'];

    public function post(){

        return $this->hasMany(Post::class);
    }

    
}
