<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:355',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
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
