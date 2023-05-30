<?php

namespace App\Repository;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Repository\AuthorRepositoryInterface;

class AuthorRepository implements AuthorRepositoryInterface{
    
  //Show All Authors
  public function showAllAuthors(){
    return Author::all();
   }

 //Show one author
 public function showOneAuthor($id){
    return Author::findOrFail($id);
   }
   

//Delete 
public function deleteAuthor($id){
    return Author::findOrFail($id)->delete();
}

    //Add an Author
    public function createAuthor($data)
    {
        return Author::create($data->all());
    }

    //Update an Author
    public function updateAuthor($id, $data){
        $author = Author::findOrFail($id);
        $author->update($data->all());
        return $author;

    }
}