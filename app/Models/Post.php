<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'description'];
    protected $fillable = ['title', 'user_id', 'description'];

    public function user(){
        // Post belongs to one user
        return $this->belongsTo(User::class, 'user_id');
    }
}
