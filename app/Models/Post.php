<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    // Relacion 1 a Muchos Inversa
    //Users
    public function user(){
        return $this->belongsTo(User::class);
    }
    //Category
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Relacion muchos a muchos
    //Tags
    public function tags(){

        return $this->belongsToMany(Tag::class);
    }

    //Rel 1 a 1 polimorfica
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }

}
