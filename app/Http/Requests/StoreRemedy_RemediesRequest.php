<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRemedy_RemediesRequest extends FormRequest
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
            'name => required|string|min:3|max:255',
            'local_name' => 'string|min:3|max:255',
            'description' => 'required|string|min:3|max:855',
            'treatment' => 'required|string|min:3|max:855',
            'usage' => 'required|string|min:3|max:855',
            'ingredient' => 'required|string|min:3|max:855',
            'side_effect' => 'string|min:3|max:855',
            'status' => 'string|in:Active,Inactive,Pending',
            'rating' => 'integer|min:0|max:5',
            'plant_id' => 'required|exists:plant__plants,id',
            'create_id' => 'required|exists:users,id',
        ];
    }
}
