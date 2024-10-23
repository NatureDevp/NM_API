<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Remedy;
use App\Http\Requests\StoreRemedyRequest;
use App\Http\Requests\UpdateRemedyRequest;
use Illuminate\Support\Facades\Validator;

class RemedyController extends Controller
{

    public function index()
    {
        $remedies = Remedy::all();

        return response()->json([
            'success' => true,
            'message' => 'Remedies retrieved successfully',
            'data' => $remedies,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRemedyRequest $request)
    {


        /*
        'plant_id',
        'name',
        'category',
        'description',
        'image',
        'ingredients',
        'prep_time',
        'frequency',
        'side_effects',
        'rating',
        'instructions',
        'storage',
        'dosage',
        'approved',
        'source',
        
        */

        $validator = Validator::make($request->all(), $request->rules());
        try {

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $validatedData = $validator->validated();

            // Create a new Remedy instance
            $remedy = new Remedy();

            // Handle file upload if an image is provided
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('remedy_image', $filename, 'public');
                $remedy->image = $path;
            }

            // Assign other request data to remedy
            $remedy->treatment = $validatedData['treatment'];
            $remedy->description = $validatedData['description'];
            $remedy->plant_id = $validatedData['plant_id'];
            $remedy->name = $validatedData['name'];
            $remedy->category = $validatedData['category'];
            $remedy->ingredients = $validatedData['ingredients'];
            $remedy->prep_time = $validatedData['prep_time'];
            $remedy->frequency = $validatedData['frequency'];
            $remedy->side_effects = $validatedData['side_effects'];
            $remedy->instructions = $validatedData['instructions'];
            $remedy->storage = $validatedData['storage'];
            $remedy->dosage = $validatedData['dosage'];
            $remedy->approved = $validatedData['approved'];
            $remedy->source = $validatedData['source'];

            // Save the remedy to the database
            $remedy->save();

            // Return success response with the created remedy
            return response()->json([
                'message' => 'Remedy created successfully!',
                'remedy' => $remedy
            ], 201); // 201 for resource created successfully

        } catch (\Exception $e) {
            // Handle general errors (e.g., file upload issues, database errors)
            return response()->json([
                'message' => 'An error occurred while creating the remedy',
                'error' => $e->getMessage()
            ], 500); // 500 for internal server error
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Remedy $remedy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRemedyRequest $request, Remedy $remedy)
    {
        //
    }

    public function upload()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Remedy $remedy)
    {
        //
    }
}
