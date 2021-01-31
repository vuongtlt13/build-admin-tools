<?php

namespace App\Repositories;

use App\Models\Application;
use App\Repositories\BaseRepository;

/**
 * Class ApplicationRepository
 * @package App\Repositories
 * @version January 31, 2021, 7:01 am UTC
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
