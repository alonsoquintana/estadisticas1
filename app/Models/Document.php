<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Document
 *
 * @property $id_documets
 * @property $title
 * @property $pdf_file
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
    'pdf_file' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_documets','title','pdf_file'];



}
