<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\RequestPlant;
use App\Http\Requests\StoreRequestPlantRequest;
use App\Http\Requests\UpdateRequestPlantRequest;
use App\Models\Plant;

class RequestPlantController extends Controller
{

    public function index()
    {
        try {
            $requestPlant = RequestPlant::all();

            if ($requestPlant->isEmpty()) {
                return response()->json([
                    'success' => false,
                    'message' => 'No request found',
                ], 404);
            }

            return response()->json([
                'success' => true,
                'message' => 'Request plants retrieved successfully',
                'data' => $requestPlant,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An internal server error occurred',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequestPlantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RequestPlant $requestPlant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequestPlantRequest $request, RequestPlant $requestPlant)
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
    public function destroy(RequestPlant $requestPlant)
    {
        //
    }
}
