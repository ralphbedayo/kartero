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

namespace App\Services\Auth\Registration;

use App\Repositories\User\UserRepository;

class RegistrationService
{
    public function __construct(private UserRepository $repository)
    {
    }

    public function createAccount(array $data): mixed
    {
        return $this->repository->model->firstOrCreate($data);
    }
}
