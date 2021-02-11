<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function tasks()
    {
        return $this->hasMany(Task::class, "cat_id", "id");
    }

    /* GET CHILDREN OF CATEGORY PARENT*/
    public function children()
    {
        return $this->hasMany(Category::class, "parent", "id");
    }

    /* GET PARENT OF CATEGORY CHILDREN*/
    public function category_parent()
    {
        return $this->belongsTo(Category::class, "parent", "id");
    }
}
