<?php

namespace App\Http\Controllers;

use App\Models\patient_profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PatientProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patient_profiles = patient_profile::paginate(6);
        return view('patient.index', compact('patient_profiles'));
            
    }
    public function create()
    {
        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    
     public function edit(patient_profile $patient_profile)
     {
         return view('patient.edit', compact('patient_profile'));
     }

    //...............update start...............
    public function update(Request $request, patient_profile $patient_profile)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:patient_profiles,email,'.$patient_profile->id,
        'password' => 'required|string|min:6',
        'age' => 'required|numeric',
        'blood_group' => 'required|string|max:10',
        'medical_history' => 'required|string',
        'country' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'address' => 'required|string',
        'gender' => 'required|string|max:10',
    ]);

    if ($request->hasFile('image')) {
        // Delete old image
        Storage::delete('public/' . $patient_profile->image);

        // Upload new image
        $imagePath = $request->file('image')->store('department', 'public');
        $validatedData['image'] = $imagePath;
    }

    $patient_profile->update($validatedData);
    
    return redirect()->route('patient.index')->with('success', 'Patient profile updated successfully!');
}
    //.............update end.................

    
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:patient_profiles',
            'password' => 'required|string|min:6',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp,avif|max:2048',
            'age' => 'required|numeric',
            'blood_group' => 'required|string|max:10',
            'medical_history' => 'required|string',
            'country' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'gender' => 'required|string|max:10',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('department', 'public');
            $validatedData['image'] = $imagePath;
        }
        
        // Create new patient profile
        patient_profile::create($validatedData);
        
        return redirect()->route('patient.index')->with('success', 'Patient profile created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(patient_profile $patient_profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function destroy(patient_profile $patient_profile)
    {
        $patient_profile->delete();
        return redirect()->route('patient.index')->with('success', 'Patient profile deleted successfully!');
    }

}
