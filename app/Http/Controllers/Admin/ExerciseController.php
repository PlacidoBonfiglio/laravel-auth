<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exercises = Exercise::all();
        return view("admin.exercises.index", compact("exercises"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.exercises.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $exerciseData = $request->validated();
        $exerciseData = $request->all();

        $exercise = new Exercise();
        $exercise = Exercise::create($exerciseData);
        return redirect()->route("admin.exercises.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $exercises = Exercise::findOrFail($id);
        return view ("admin.exercises.show", compact("exercise"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $exercise = Exercise::findOrFail($id);
        return view("admin.exercises.edit", compact("exercise"));
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
