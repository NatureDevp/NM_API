<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => 'string|min:3|max:355',
            'email' => 'email|exists:users,email',
            'password' => 'string|min:8',
            'type' => 'string|in:User,Admin',
            'status' => 'string|in:Active,Inactive|Offline',
            'total_plant_request' => 'integer|min:0',
            'total_remedy_request' => 'integer|min:0',
            'total_update' => 'integer|min:0',
            'total_delete' => 'integer|min:0',
            'total_create' => 'integer|min:0',
        ];
    }
}
