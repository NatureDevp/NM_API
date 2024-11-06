<?php

namespace App\Http\Controllers\API\V1\REQUEST;

use App\Http\Controllers\Controller;
use App\Models\RequestPlant;
use App\Http\Requests\StoreRequestPlantRequest;
use App\Http\Requests\UpdateRequestPlantRequest;

class RequestPlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $request_Plants = RequestPlant::with('images', 'userRequestby', 'userAcceptby')->get();
        return response()->json(['success' => true, 'message' => 'Request_Plants fetched successfully.', 'data' => $request_Plants], 200);
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RequestPlant $requestPlant)
    {
        //
    }


    public function userWorkplace($id)
    {
        $request_Plants = RequestPlant::where('accept_by', $id)->with('userRequestby', 'userAcceptby')->get();
        return response()->json(['success' => true, 'message' => 'Request_Plants fetched successfully.', 'data' => $request_Plants], 200);
    }
}
