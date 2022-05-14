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

namespace App\Http\Controllers\Inertia\Auth\Registration;

use App\Constants\Inertia\PageNames;
use App\Http\Controllers\Inertia\InertiaBaseController;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Providers\RouteServiceProvider;
use App\Services\Auth\Registration\RegistrationService;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class RegistrationController extends InertiaBaseController
{
    protected string $pageNamespace = 'Auth/Registration/';

    /**
     * @param RegistrationService $service
     */
    public function __construct(private RegistrationService $service)
    {
    }

    public function index(): Response
    {
        return Inertia::render($this->pageNamespace.PageNames::REGISTER);
    }

    public function store(RegistrationRequest $request): RedirectResponse
    {
        $newUser = $this->service->createAccount($request->except(['password_confirmation']));

        auth()->login($newUser);

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
