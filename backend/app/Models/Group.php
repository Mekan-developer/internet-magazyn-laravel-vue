<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
     protected $fillable = ['title'];

     public function products(){
        return $this->hasMany(Product::class); 
     } 

}
