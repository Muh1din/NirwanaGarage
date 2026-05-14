<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasSlug;
    
    protected $table = 'categories';

    protected $fillable = [
        'slug',
        'name_category',
    ];

    public function project(){
        return $this->hasMany(Project::class);
    }

    
}
