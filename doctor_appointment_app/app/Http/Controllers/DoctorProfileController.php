<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Models\doctor_profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class DoctorProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $doctor_profiles = doctor_profile::paginate(10);
       return view('doctor.index', compact('doctor_profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    //    $departments = department::pluck('name', 'id');
    $departments = department::all();
        return view('doctor.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('doctor_profiles')],
            'image' => 'required|image',
            'department' => 'required',
            'education' => 'required',
            'experience' => 'required',
            'fees' => 'required',
            'about' => 'required',
            'gender' => 'required',
            'degree' => 'required',
            'university' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
    
        // Handle file upload
        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('department', $imageName, 'public');
        $imagePath = $request->file('image')->store('department', 'public');
    
        // Create doctor profile if validation passes
        doctor_profile::create([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $imagePath,
            'department' => $request->department,
            'education' => $request->education,
            'experience' => $request->experience,
            'fees' => $request->fees,
            'about' => $request->about,
            'gender' => $request->gender,
            'degree' => $request->degree,
            'university' => $request->university,
            'country' => $request->country,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
    
        return redirect()->route('finddoctor.index')->with('success', 'Doctor Profile Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(doctor_profile $doctor_profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   /**
 * Show the form for editing the specified resource.
 */
public function edit($id)
{
    // Find the doctor profile by ID
    $doctor = doctor_profile::findOrFail($id);
    
    // Pass the doctor profile to the edit view
    return view('doctor.edit', compact('doctor'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find the doctor profile by ID
        $doctor = doctor_profile::findOrFail($id);
        
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'department' => 'required',
            'education' => 'required',
            'experience' => 'required',
            'fees' => 'required',
            'about' => 'required',
            'gender' => 'required',
            'degree' => 'required',
            'university' => 'required',
            'country' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,avif,webp,bmp,ico,tiff|max:2048',
        ]);

        $imagePath = $doctor->image;

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($doctor->image);
            $imagePath = $request->file('image')->store('doctor_images', 'public');
        }

        $doctor->update([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $imagePath,
            'department' => $request->department,
            'education' => $request->education,
            'experience' => $request->experience,
            'fees' => $request->fees,
            'about' => $request->about,
            'gender' => $request->gender,
            'degree' => $request->degree,
            'university' => $request->university,
            'country' => $request->country,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->route('finddoctor.index')->with('success', 'Doctor Profile Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        doctor_profile::findOrFail($id)->delete();

        return redirect()->route('finddoctor.index')->with('status', 'Doctor deleted successfully!');
    }
}
