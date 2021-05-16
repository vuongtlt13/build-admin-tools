<?php

namespace App\Repositories;

use App\Models\Application;
use App\Repositories\BaseRepository;

/**
 * Class ApplicationRepository
 * @package App\Repositories
 * @version May 16, 2021, 11:47 am UTC
*/

class ApplicationRepository extends BaseRepository
{
    /**
     * Configure the Model
     **/
    public function model()
    {
        return Application::class;
    }
}
