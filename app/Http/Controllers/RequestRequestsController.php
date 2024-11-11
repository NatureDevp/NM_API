<?php

namespace App\Http\Controllers;

use App\Models\Request_Requests;
use App\Http\Requests\StoreRequest_RequestsRequest;
use App\Http\Requests\UpdateRequest_RequestsRequest;

class RequestRequestsController extends Controller
{
    //========================================================================
    public function index()
    {
        $data = Request_Requests::all();

        if ($data->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'No requests found.'], 200);
        }
        return response()->json(['success' => true, 'message' => 'Requests fetched successfully.', 'data' => $data], 200);
    }

    //========================================================================
    public function store(StoreRequest_RequestsRequest $request)
    {
        $request->validated();
        $user = Request_Requests::create($request->all());

        if ($user) {
            return response()->json(['success' => true, 'message' => 'Request created successfully.', 'data' => $user], 201);
        }
        return response()->json(['success' => false, 'message' => 'Request failed to create.'], 204);
    }

    //========================================================================
    public function show(Request_Requests $request_Requests)
    {
        $data = $request_Requests->load('request_by', 'accept_by');
        return response()->json(['success' => true, 'message' => 'Request found.', 'data' => $data], 200);
    }

    //========================================================================
    public function update(UpdateRequest_RequestsRequest $request, Request_Requests $request_Requests)
    {
        $request->validated();
        $user = $request_Requests->update($request->all());
        if ($user) {
            return response()->json(['success' => true, 'message' => 'Request updated successfully.', 'data' => $user], 200);
        }
        return response()->json(['success' => false, 'message' => 'Request failed to update.'], 204);
    }

    //========================================================================
    public function destroy(Request_Requests $request_Requests)
    {
        $user = $request_Requests->delete();
        if ($user) {
            return response()->json(['success' => true, 'message' => 'Request deleted successfully.', 'data' => $user], 200);
        }
        return response()->json(['success' => false, 'message' => 'Request failed to delete.'], 204);
    }
}
