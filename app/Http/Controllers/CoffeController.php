<?php

namespace App\Http\Controllers;

use App\Models\Coffe;
use \Illuminate\Http\Response;
use Illuminate\Http\Request;

class CoffeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Coffe::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $coffe = Coffe::create($request->all());
        return response()->json(['coffe' => $coffe], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Coffe $coffe)
    {
        return response()->json(['coffe' => $coffe], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coffe $coffe)
    {
        $coffe->update($request->all());
        return response()->json(['coffe' => $coffe], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coffe $coffe)
    {
        $coffe->delete();
        return response()->json(['coffe' => $coffe], Response::HTTP_ACCEPTED);
    }
}
