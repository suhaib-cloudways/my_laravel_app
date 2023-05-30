<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'name', 'email', 'github', 'twitter', 'location',
    ];

   // Belongs to  connection

   public function product() {
    return $this->hasMany(Product::class);
 }

 public function books() {
    return $this->BelongsToMany(Books::class, 'author_books');
 }
    protected $hidden = [];
}