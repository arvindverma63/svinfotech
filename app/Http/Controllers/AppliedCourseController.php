<?php

namespace App\Http\Controllers;

use App\Models\AppliedCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AppliedCourseController extends Controller
{
    public function apply(Request $request)
{
    Log::info('Starting job application submission');

    try {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phoneNumber' => 'required|string',
            'details' => 'nullable|string',
            'resume' => 'required|file|mimes:pdf|max:2048',
            'qualification' => 'required|string',
            'jobId' => 'required|integer',
        ]);

        Log::info('Validation passed', ['data' => $validated]);

        // Store the resume file
        if ($request->hasFile('image')) {
            // Generate a unique file name with extension
            $filename = time() . '_' . $request->file('image')->getClientOriginalName();

            // Move the file to public/uploads and store only the relative path
            $request->file('image')->move(public_path('uploads'), $filename);
            $filePath = 'uploads/' . $filename; // Only store relative path

            Log::info('Resume file stored successfully', ['file_path' => $filePath]);
        } else {
            $filePath = null;
            Log::warning('No resume file found in request');
        }

        // Insert record using the AppliedCourse model
        $jobData = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phoneNumber' => $validated['phoneNumber'],
            'courseId' => $validated['courseId'],
            'details' => $validated['details'] ?? '',
            'image' => $filePath,
            'qualification' => $validated['qualification'],
        ];

        Log::info('Preparing to insert data', ['job_data' => $jobData]);

        $jobApplication = AppliedCourse::create($jobData);

        Log::info('Job application submitted successfully', ['job_id' => $jobApplication->id]);

        return redirect()->back()->with('success', 'Your application has been submitted successfully.');

    } catch (\Exception $e) {
        Log::error('An error occurred during job application submission', [
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString(),
        ]);

        return redirect()->back()->withErrors([
            'error' => 'An error occurred while submitting your application. Please try again later.'
        ]);
    }
}


    public function appliedGrid($id){
        $data = AppliedCourse::where('jobId',$id)->get();

        if($data){
            return view('Admin.applied',['data'=>$data]);
        }
    }
}
