<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Document
 *
 * @property $id_documets
 * @property $title
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Document extends Model
{
    
    static $rules = [
		'id_documets' => 'required',
		'title' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_documets','title'];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

}
