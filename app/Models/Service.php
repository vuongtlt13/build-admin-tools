<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Service
 * @package App\Models
 * @version May 16, 2021, 12:43 pm UTC
 *
 * @property id $id
 * @property integer $application_id
 * @property string $name
 * @property boolean $is_active
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Service extends EloquentModel
{
    use SoftDeletes;


    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    const DELETED_AT = 'deleted_at';

    
    protected $dates = ['deleted_at'];


    public $table = 'services';

    public $fillable = [
        'id',
        'application_id',
        'name',
        'is_active',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'application_id' => 'integer',
        'name' => 'string',
        'is_active' => 'boolean',
        'deleted_at' => 'timestamp'
    ];

    
}
