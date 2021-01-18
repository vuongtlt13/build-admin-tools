<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Application
 * @package App\Models
 * @version January 18, 2021, 9:49 am UTC
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

    
}
