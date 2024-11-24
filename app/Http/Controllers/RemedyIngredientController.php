<?php

namespace App\Http\Controllers;

use App\Models\Remedy_Ingredient;
use App\Http\Requests\StoreRemedy_IngredientRequest;
use App\Http\Requests\UpdateRemedy_IngredientRequest;

class RemedyIngredientController extends Controller
{
    public function index()
    {
        $data = Remedy_Ingredient::all();

        if ($data->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'No ingredients found.'], 200);
        }
        return response()->json(['success' => true, 'message' => 'Ingredients fetched successfully.', 'data' => $data], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRemedy_IngredientRequest $request)
    {
        $request->validated();
        $remedy_ingredient = Remedy_Ingredient::create($request->all());

        if ($remedy_ingredient) {
            return response()->json(['success' => true, 'message' => 'Ingredients created successfully.', 'data' => $remedy_ingredient], 201);
        }
        return response()->json(['success' => false, 'message' => 'Failed to create Ingredients.'], 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Remedy_Ingredient $ingredient)
    {
        if ($ingredient) {
            return response()->json(['success' => true, 'message' => 'Ingredients found.', 'data' => $ingredient], 200);
        }
        return response()->json(['success' => false, 'message' => 'Ingredients not found.'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRemedy_IngredientRequest $request, Remedy_Ingredient $ingredient)
    {
        $request->validated();
        $isSuccess = $ingredient->update($request->all());
        if ($isSuccess) {
            return response()->json(['success' => true, 'message' => 'Ingredients updated successfully.'], 200);
        }
        return response()->json(['success' => false, 'message' => 'Ingredients failed to update.'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Remedy_Ingredient $ingredient)
    {
        $isSuccess = $ingredient->delete();
        if ($isSuccess) {
            return response()->json(['success' => true, 'message' => 'Ingredients deleted successfully.'], 200);
        }
        return response()->json(['success' => false, 'message' => 'Ingredients failed to delete.'], 200);
    }

    //===================================================================================

    public function clearAll($remedyID)
    {
        try {
            // Delete related records in Plant_Treatment
            $deletedCount = Remedy_Ingredient::where('remedy_id', $remedyID)->delete();

            if ($deletedCount === 0) {
                return response()->json(['success' => false, 'message' => 'No Ingredients found for the specified remedy ID.'], 404);
            }

            return response()->json(['success' => true, 'message' => "$deletedCount Ingredients cleared successfully."], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to clear Ingredients: ' . $e->getMessage()], 500);
        }
    }
}
