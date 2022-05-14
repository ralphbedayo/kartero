<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'first_name'            => 'required|string|max:24',
            'last_name'             => 'required|string|max:24',
            'email'                 => 'required|string|unique:users,email|email|max:48',
            'password'              => ['required', 'confirmed', 'max:16', Password::min(8)->uncompromised()],
            'password_confirmation' => 'required|min:8|max:16',
        ];
    }


}
