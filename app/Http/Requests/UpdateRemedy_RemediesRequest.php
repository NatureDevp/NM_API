<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRemedy_RemediesRequest extends FormRequest
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
            'name => string|min:3|max:255',
            'local_name' => 'string|min:3|max:255',
            'description' => 'string|min:3|max:855',
            'treatment' => 'string|min:3|max:855',
            'usage' => 'string|min:3|max:855',
            'side_effect' => 'string|min:3|max:855',
            'ingredient' => 'string|min:3|max:855',
            'status' => 'string|in:Active,Inactive,Pending',
            'rating' => 'integer|min:0|max:5',
            'plant_id' => 'exists:plant__plants,id',
            'update_id' => 'exists:users,id',
        ];
    }
}
