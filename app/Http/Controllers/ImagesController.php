<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Http\Requests\StoreImagesRequest;
use App\Http\Requests\UpdateImagesRequest;

class ImagesController extends Controller
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
    public function store(StoreImagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Images $images)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImagesRequest $request, Images $images)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Images $images)
    {
        //
    }
}
