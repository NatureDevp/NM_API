<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest_RequestsRequest extends FormRequest
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
            'scientific_name' => 'required|string|min:3|max:355',
            'description' => 'required|string|min:3|max:355',
            'additional_info' => 'string|min:3|max:355',
            'status' => 'string|min:3|max:155',
            'admin_id' => 'string|exists:users,id',
            'user_id' => 'string|exists:users,id',
        ];
    }
}
