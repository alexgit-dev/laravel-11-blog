<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $meta_desc
 */
class Category extends Model
{

    protected $table = 'categories';
    protected $fillable = ['title', 'meta_desc'];

    // для генерации слагов
    // https://github.com/cviebrock/eloquent-sluggable
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title' // generate slug for field 'title'
            ]
        ];
    }
}
