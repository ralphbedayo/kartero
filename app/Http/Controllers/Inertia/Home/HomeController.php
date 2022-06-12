<?php

namespace App\Http\Controllers\Inertia\Home;

use App\Constants\Inertia\PageNames;
use App\Http\Controllers\Inertia\InertiaBaseController;
use Inertia\Inertia;

class HomeController extends InertiaBaseController
{
    protected string $pageNamespace = 'Home/';


    /**
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render($this->pageNamespace . PageNames::HOME);
    }
}
