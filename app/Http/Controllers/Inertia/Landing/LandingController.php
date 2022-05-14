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

namespace App\Http\Controllers\Inertia\Landing;

use App\Http\Controllers\Inertia\InertiaBaseController;
use Inertia\Inertia;
use Inertia\Response;

class LandingController extends InertiaBaseController
{
    protected string $pageNamespace = 'Landing/';

    public function index(): Response
    {
        return Inertia::render($this->pageNamespace.'Landing', [
            'user' => [
                'name' => 'Ralph',
            ],
        ]);
    }
}
