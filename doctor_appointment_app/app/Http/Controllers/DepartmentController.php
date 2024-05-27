<?php

namespace App\Http\Controllers;

use App\Models\department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('departments.index');
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
         try {
             // Validate the incoming request data
             $validatedData = $request->validate([
                 'name' => 'required|string|max:255',
                 'description' => 'nullable|string',
                 'status' => 'required|boolean',
             ]);
     
             // Create a new department instance
             $department = new department([
                 'name' => $validatedData['name'],
                 'description' => $validatedData['description'],
                 'is_active' => $validatedData['status'],
             ]);
     
             // Save the department to the database
             $department->save();
     
             // Redirect back with a success message
             return redirect()->back()->with('success', 'Department created successfully!');
         } catch (\Exception $e) {
             // Log the exception or display an error message
             dd($e->getMessage()); // Display the error message
         }
     }
     


    /**
     * Display the specified resource.
     */
    public function show(department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(department $department)
    {
        //
    }
}
