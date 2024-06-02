<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Models\dlist;
use Illuminate\Http\Request;

class DlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments =department::paginate(7);
        return view('admin.index', compact('departments'));
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
    public function show(dlist $dlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dlist $dlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dlist $dlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dlist $dlist)
    {
        //
    }
}
