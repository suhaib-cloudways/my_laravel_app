<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $table = 'laravel_tables';


    protected $fillable = [
        'picture', 'title', 'price', 'description'
    ];


    // has many relation

    public function comments() {
       return $this->hasMany(Comment::class);
    }


}