<?php

namespace App\Services\Auth\Registration;

use App\Repositories\User\UserRepository;

class RegistrationService
{
    public function __construct(private UserRepository $repository)
    {
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function createAccount(array $data): mixed
    {
        return $this->repository->model->firstOrCreate($data);
    }

}
