<?php

namespace App\Http\Requests\Core\Profile;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore(auth()->user()->id)->withoutTrashed()],
            'phone' => ['nullable', 'numeric', 'digits_between:10,15'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ];
    }
}
