<?php

namespace App\Http\Controllers\Inertia\Landing;


use App\Http\Controllers\Inertia\InertiaBaseController;
use Inertia\Inertia;
use Inertia\Response;

class LandingController extends InertiaBaseController
{
    protected string $pageNamespace = 'Landing/';
    /**
     * @return Response
     */
    public function index(): Response
    {
        return Inertia::render($this->pageNamespace . 'Landing', [
            'user' => [
                'name' => 'Ralph'
            ]
        ]);
    }

}
