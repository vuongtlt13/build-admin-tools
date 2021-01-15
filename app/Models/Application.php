<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Application
 * @package App\Models
 * @version January 15, 2021, 10:42 am UTC
 *
 * @property string $name
 * @property string $description
 * @property string $deleted_at
 */
class Application extends EloquentModel
{
        use SoftDeletes;

    public $table = 'applications';

    public $fillable = [
        'name',
        'description',
        'deleted_at'
    ];

    
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string'
    ];

    
}
