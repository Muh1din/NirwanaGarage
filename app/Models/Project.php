<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Traits\HasSlug;

class Project extends Model
{
    use HasSlug;
    protected $table = 'projects';

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'project_code',
        'client_name',
        'description_short',
        'procces_text',
        'main_image',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function projectImages(){
        return $this->hasMany(ProjectImage::class);
    }

    public function projectSpecs(){
        return $this->hasMany(ProjectSpec::class);
    }

   // generate code unik untuk project_code
   protected static function booted()
    {
         static::creating(function ($project) {
             do {
                $code = strtoupper(Str::random(8)); 
                } while (self::where('project_code', $code)->exists()); 
             $project->project_code = $code;
             }
         );
    }
}
