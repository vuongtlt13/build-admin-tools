<?php

namespace App\Repositories;

use App\Models\Service;
use App\Repositories\BaseRepository;

/**
 * Class ServiceRepository
 * @package App\Repositories
 * @version May 16, 2021, 12:43 pm UTC
*/

class ServiceRepository extends BaseRepository
{
    /**
     * Configure the Model
     **/
    public function model()
    {
        return Service::class;
    }
}
