<?php

namespace App\Traits;

use Closure;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @method static void creating(Closure $callback)
 */

trait HasSlug
{  
    protected static function bootHasSlug()
    {
        /** @var Model $model */
        
        static::creating(function (Model $model) {
            $source = $model->title ?? $model->name ?? $model->name_category;

            if ($source) {
                $slug = Str::slug($source);
                $original = $slug;
                $count = 1;

                while ($model->newQuery()->where('slug', $slug)->exists()) {
                    $slug = $original . '-' . $count++;
                }

                $model->setAttribute('slug', $slug);
            }
        });
    }
}
