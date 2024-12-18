<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlant_PlantsRequest extends FormRequest
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
            'scientific_name' => 'string|min:3|max:355',
            'description' => 'string|min:3',
            'cover' => 'image|mimes:jpeg,png,jpg|max:4048',
            'create_id' => 'string|exists:users,id',
            'request_id' => 'string|exists:request__requests,id',
        ];
    }
}
