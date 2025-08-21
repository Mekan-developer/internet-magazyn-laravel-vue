<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use Filterable;
    protected $guarded = [];

    public function tags()
    {
        return $this->belongsToMany(Tag::class); // многие ко многим
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);

    }

    public function group()
    {
        return $this->belongsTo(Group::class);

    }

    public function getImageUrlAttribute(){
        return asset('storage/'.$this->preview_image);
    }
}
