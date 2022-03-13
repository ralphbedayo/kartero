<?php

namespace App\Http\Controllers\Inertia\Auth\Login;

use App\Http\Controllers\Inertia\InertiaBaseController;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Inertia\Inertia;

class LoginController extends InertiaBaseController
{
    protected string $pageNamespace = 'Auth/Login/';

    //@todo move this constant to general constants class
    public const LOGIN_PAGE_NAME = 'Login';

    /**
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render($this->pageNamespace . self::LOGIN_PAGE_NAME);
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
