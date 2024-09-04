<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class updateAccountRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['sometimes','string','min:2','max:40'],
            'username' => ['sometimes','string','min:2','max:40',Rule::unique('users')->ignore($this->user()->id)],
            'email' => ['sometimes','email',Rule::unique('users')->ignore($this->user()->id)],
            'password' =>['sometimes','nullable','min:8'],
            'file' => ['sometimes','nullable','image']

        ];
    }
}
