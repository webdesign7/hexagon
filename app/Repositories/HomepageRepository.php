<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleJsonRepeaters;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Homepage;

class HomepageRepository extends ModuleRepository
{
    use HandleMedias;
    use HandleJsonRepeaters;

    protected $jsonRepeaters = [
        'why',
    ];
    public function __construct(Homepage $model)
    {
        $this->model = $model;
    }
}
