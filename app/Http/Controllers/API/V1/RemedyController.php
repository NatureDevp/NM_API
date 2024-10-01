<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Remedy;
use App\Http\Requests\StoreRemedyRequest;
use App\Http\Requests\UpdateRemedyRequest;

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
        //
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Remedy $remedy)
    {
        //
    }
}
