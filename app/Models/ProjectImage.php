<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectsImage extends Model
{
    protected $table = 'project_images';

    protected $fillable = [
        'project_id',
        'sub_image',
        'caption',
    ];

    public function projects(){
       return $this->belongsTo(Project::class);
    }
}
