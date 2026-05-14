<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectSpec extends Model
{
    protected $table = 'project_specs';

    protected $fillable = [
        'project_id',
        'spec_name',
        'spec_value',
    ];

    public function projects(){
        return $this->belongsTo(Project::class);
    }
}
