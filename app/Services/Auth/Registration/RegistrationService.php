<?php

namespace App\Services\Auth\Registration;

use App\Constants\CommonConstants;
use App\Models\User;
use App\Repositories\User\UserRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        $data['password'] = Hash::make($data['password']);
        $data['remember_token'] = Str::random(CommonConstants::REMEMBER_TOKEN_SIZE);

        return $this->repository->model->firstOrCreate($data);
    }

}
