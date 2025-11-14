<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCameraRequest;
use App\Http\Requests\UpdateCameraRequest;
use App\Models\Camera;
use Illuminate\Support\Facades\Response;

class CameraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Response::json(Camera::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCameraRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Camera $camera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Camera $camera)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCameraRequest $request, Camera $camera)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Camera $camera)
    {
        //
    }
}
