<?php

namespace App\Repositories;

use App\Models\Application;
use App\Repositories\BaseRepository;

/**
 * Class ApplicationRepository
 * @package App\Repositories
 * @version May 9, 2021, 6:52 am UTC
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
