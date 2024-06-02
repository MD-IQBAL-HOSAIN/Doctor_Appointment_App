<?php

namespace App\Http\Controllers;

use App\Models\myprofile;
use Illuminate\Http\Request;

class MyprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Mprofile.index');
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
    public function show(myprofile $myprofile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(myprofile $myprofile)
    {
         return view('Mprofile.edit');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, myprofile $myprofile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(myprofile $myprofile)
    {
        if ($myprofile->delete()) {
            return redirect()->route('Mprofile.index')->with('success','Myprofile deleted successfully.');
        }
        return redirect()->route('Mprofile.index')->with('error','Failed to delete Myprofile.');
    }
}
