<?php

namespace App\Repositories;

use App\Models\Application;
use App\Repositories\BaseRepository;

/**
 * Class ApplicationRepository
 * @package App\Repositories
 * @version February 4, 2021, 2:15 pm UTC
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
