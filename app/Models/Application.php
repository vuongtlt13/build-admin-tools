<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Application
 * @package App\Models
 * @version May 9, 2021, 6:52 am UTC
 *
 * @property id $id
 * @property string $code
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
        'id',
        'code',
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
        'code' => 'string',
        'deleted_at' => 'timestamp'
    ];

    
}
