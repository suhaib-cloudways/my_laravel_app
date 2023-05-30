<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
   
    protected $fillable = [
        'title','description'
   ];

    use HasFactory;

    public function author() {
        return $this->BelongsToMany(Author::class, 'author_books');
     }

}
