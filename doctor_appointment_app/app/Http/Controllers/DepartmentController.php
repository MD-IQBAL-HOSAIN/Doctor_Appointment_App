<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all departments from the database
        $departments = Department::all();

        // Pass the departments to the view
        return view('departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('departments.create');
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
                 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             ]);
             $imagePath = $request->file('image')->store('department', 'public');

     
             // Create a new department instance
             $department = new department([
                 'name' => $validatedData['name'],
                 'description' => $validatedData['description'],
                 'is_active' => $validatedData['status'],
                 'image' => $imagePath
                 
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
        return view('departments.show',compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Find the department by ID
        $department = Department::findOrFail($id);
        
        // Pass the department to the edit view
        return view('departments.edit', compact('department'));
    }

    public function update(Request $request, $id)
    {
        // Find the department by ID
        $department = Department::findOrFail($id);
        
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,avif,svg|max:2048',
        ]);

        // If image is uploaded, update the image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;
        }

        // Update the department with the validated data
        $department->update($validatedData);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Department updated successfully!');
    }
    public function destroy(department $department)
    {
        try {
            $department->delete();
            return redirect()->back()->with('success', 'Department deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting department!');
        }
    }
}
