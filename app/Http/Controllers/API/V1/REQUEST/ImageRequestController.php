<?php

namespace App\Http\Controllers\API\V1\REQUEST;

use App\Http\Controllers\Controller;
use App\Models\Image_Request;
use App\Http\Requests\StoreImage_RequestRequest;
use App\Http\Requests\UpdateImage_RequestRequest;

class ImageRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreImage_RequestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Image_Request $image_Request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImage_RequestRequest $request, Image_Request $image_Request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image_Request $image_Request)
    {
        //
    }
}
