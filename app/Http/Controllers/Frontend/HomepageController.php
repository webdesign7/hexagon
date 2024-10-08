<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Homepage;
use App\Models\Service;
use App\Repositories\ServiceRepository;

class HomepageController extends Controller
{
    public function __construct(public ServiceRepository $serviceSepository)
    {
    }

    /**
     * Provision a new web server.
     */
    public function __invoke()
    {
        $services = Service::published()->orderBy('created_at', 'desc')->get();

        /** @var \App\Models\Homepage $frontPage */
        $frontPage = Homepage::published()->first();

        return view('homepage', [
            'services' => $services,
            'homepage' => $frontPage,
        ]);
    }
}
