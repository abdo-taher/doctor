<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'firstName' => 'required|string|max:255',
            'gender' => 'int',
            'birthday' => 'required|date|date_format:Y-m-d|before:'.now()->subYears(18)->toDateString(),
            'mobile' => 'required',
            'email' => 'required|string|lowercase|email|max:255|unique:users',
            'password' => ['required',Rules\Password::defaults()],
        ];
    }



}
