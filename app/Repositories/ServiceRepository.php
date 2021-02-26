<?php

namespace App\Repositories;

use App\Models\Service;
use App\Repositories\BaseRepository;

/**
 * Class ServiceRepository
 * @package App\Repositories
 * @version February 4, 2021, 9:45 am UTC
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
