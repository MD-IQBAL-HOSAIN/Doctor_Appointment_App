<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DepartmentController extends Controller
{    
 //...............................index..............................................................
    public function index()
    {
        // Fetch all departments from the database and paginate them
        $departments = Department::paginate(6);
        return view('departments.index', compact('departments'));
    }

    //...............................create..............................................................
    public function create()
    {
       return view('departments.create');
    }

       //...............................store..............................................................

     public function store(Request $request)
     {
         try {
             // Validate the incoming request data
             $validatedData = $request->validate([
                 'name' => 'required|string|max:255',
                 'description' => 'nullable|string',
                 'status' => 'required|boolean',
                 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
             ]);
             $imagePath = $request->file('image')->store('department', 'public');

             //for resize
            /*  $imagePath = $request->file('image')->store('department', 'public');
             $image = Image::make(storage_path('app/public/' . $imagePath))->resize(1024, 576);             
             $image->save();
            */
     
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
     


   //...............................store..............................................................

    public function show(department $department)
    {
        return view('departments.show',compact('department'));
    }

    

//...............................edit..............................................................

    public function edit($id)
    {
        // Find the department by ID
        $department = Department::findOrFail($id);
        
        // Pass the department to the edit view
        return view('departments.edit', compact('department'));
    }

//...............................update..............................................................
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
            // Delete old image
            Storage::delete('public/' . $department->image);

            // Upload new image
            $imagePath = $request->file('image')->store('department', 'public');
            $validatedData['image'] = $imagePath;
        }

        // Update the department with the validated data
        $department->update($validatedData);

        // Redirect back with a success message
        return redirect()->route('departments.index')->with('success', 'Department updated successfully!');
    }

   //...............................destroy..............................................................

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
