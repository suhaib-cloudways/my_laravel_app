<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $table = 'laravel_tables';


    protected $fillable = [
       'authors_id', 'picture', 'title', 'price', 'description'
    ];


    // has many relation

    public function comments() {
       return $this->hasMany(Comment::class);
    }
    public function author() {
        return $this->belongsTo(Author::class);
     }

}