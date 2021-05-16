<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Application
 * @package App\Models
 * @version May 16, 2021, 11:47 am UTC
 *
 * @property string $code
 * @property id $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
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
        'code',
        'id',
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
        'code' => 'string',
        'id' => 'integer',
        'deleted_at' => 'timestamp'
    ];

    
}
