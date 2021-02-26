<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Application
 * @package App\Models
 * @version February 4, 2021, 2:15 pm UTC
 *
 * @property string $name
 * @property string $description
 */
class Application extends EloquentModel
{
    use SoftDeletes;

    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    const DELETED_AT = 'deleted_at';

    
    protected $dates = ['deleted_at'];


    public $table = 'applications';

    public $fillable = [
        'name',
        'description'
    ];

    
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'deleted_at' => 'timestamp'
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        $DEFAULT_VALUES$,
    ];
    
}
