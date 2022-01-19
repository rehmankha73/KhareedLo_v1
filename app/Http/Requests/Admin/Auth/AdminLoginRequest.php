<?php

namespace App\Http\Requests\Admin\Auth;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => ['required', 'email', 'min:3', 'exists:admins,email'],
            'password' => ['required'],
            'remember' => ['nullable'],
        ];
    }
}
