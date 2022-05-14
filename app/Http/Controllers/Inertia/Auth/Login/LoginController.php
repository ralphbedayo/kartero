<?php

namespace App\Http\Controllers\Inertia\Auth\Login;

use App\Constants\Inertia\PageNames;
use App\Http\Controllers\Inertia\InertiaBaseController;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Inertia\Inertia;

class LoginController extends InertiaBaseController
{
    protected string $pageNamespace = 'Auth/Login/';

    /**
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render($this->pageNamespace . PageNames::LOGIN);
    }

    /**
     * @param LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

}
