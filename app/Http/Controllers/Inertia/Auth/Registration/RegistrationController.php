<?php

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

    /**
     * @return Response
     */
    public function index(): Response
    {
        return Inertia::render($this->pageNamespace . PageNames::REGISTER);
    }

    /***
     * @param RegistrationRequest $request
     * @return RedirectResponse
     */
    public function store(RegistrationRequest $request): RedirectResponse
    {
        $newUser = $this->service->createAccount($request->except(['password_confirmation']));

        auth()->login($newUser);

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
