<?php

namespace App\Http\Controllers;

use App\Models\Pintor;
use Illuminate\Http\Request;

class PintoresController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pintores = Pintor::all();

        return view('pintores.index', compact('pintores'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $pintor = Pintor::where('slug', $slug)->firstOrFail();

        return view('pintores.mostrar', compact('pintor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
