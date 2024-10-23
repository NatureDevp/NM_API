<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRemedyRequest extends FormRequest
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
            'plant_id' => 'required|integer|exists:plants,plantid',
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'ingredients' => 'required|string|max:255',
            'prep_time' => 'required|string|max:255',
            'side_effects' => 'required|string|max:255',
            'instructions' => 'required|string',
            'storage' => 'required|string|max:255',
            'dosage' => 'required|string|max:255',
            'approved' => 'required|boolean',
            'frequency' => 'required|string|max:255',
            'treatment' => 'required|string|max:255',
            'source' => 'nullable|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }
}
