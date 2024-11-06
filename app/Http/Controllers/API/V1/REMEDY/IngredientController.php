<?php

namespace App\Http\Controllers\API\V1\REMEDY;

use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use App\Http\Requests\StoreIngredientRequest;
use App\Http\Requests\UpdateIngredientRequest;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingredients = Ingredient::with('remedy')->get();
        if ($ingredients->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'Empty. No ingredients found.'], 404);
        }
        return response()->json(['success' => true, 'message' => 'Ingredients fetched successfully.', 'data' => $ingredients], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 'name',
        // 'quantity',
        // 'description',
        // 'remedy_id',
        $customMessage = [
            'name.required' => 'Name is required.',
            'quantity.required' => 'Quantity is required.',
            'description.required' => 'Description is required.',
            'remedy_id.required' => 'Remedy is required.',
            'remedy_id.exists' => 'Invalid. Remedy id does not exist.',
        ];

        $validation = [
            'name' => 'required|string',
            'quantity' => 'required|string',
            'description' => 'required|string',
            'remedy_id' => 'required|exists:remedies,id',
        ];

        $request->validate($request, $validation, $customMessage);

        $ingredient = Ingredient::create($request->all());
        return response()->json(['success' => true, 'message' => 'Ingredient created successfully.', 'data' => $ingredient], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingredient $ingredient)
    {
        $ingredient->load('remedy');
        return response()->json(['success' => true, 'message' => 'Ingredient fetched successfully.', 'data' => $ingredient], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingredient $ingredient)
    {
        $ingredient->update($request->all());
        return response()->json(['success' => true, 'message' => 'Ingredient updated successfully.', 'data' => $ingredient], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingredient $ingredient)
    {
        $ingredient->delete();
        return response()->json(['success' => true, 'message' => 'Ingredient deleted successfully.'], 200);
    }
}
