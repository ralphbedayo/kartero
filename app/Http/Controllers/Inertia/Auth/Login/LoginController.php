<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

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
        return Inertia::render($this->pageNamespace.PageNames::LOGIN);
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
