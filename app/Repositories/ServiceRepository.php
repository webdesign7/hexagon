<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Service;

class ServiceRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias;

    public function __construct(Service $model)
    {
        $this->model = $model;
    }
}
