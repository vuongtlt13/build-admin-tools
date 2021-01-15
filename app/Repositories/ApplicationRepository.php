<?php

namespace App\Repositories;

use App\Models\Application;
use App\Repositories\BaseRepository;

/**
 * Class ApplicationRepository
 * @package App\Repositories
 * @version January 15, 2021, 10:42 am UTC
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
