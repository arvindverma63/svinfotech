<?php

namespace App\Http\Controllers;

use App\Models\AppliedCourse;
use App\Models\Course;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Store a new job in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postJob(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'details' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'description' => 'required|string',
            'active' => 'required|integer|in:0,1',
            'exInYear' => 'required|integer|min:0',
            'exInMonth' => 'required|integer|min:0|max:11',
        ]);

        // Create a new job record
        Course::create([
            'name' => $validated['name'],
            'title' => $validated['title'],
            'details' => $validated['details'],
            'type' => $validated['type'],
            'description' => $validated['description'],
            'active' => $validated['active'],
            'exInYear' => $validated['exInYear'],
            'exInMonth' => $validated['exInMonth'],
        ]);

        // Redirect to a specific route with a success message
        return redirect()->route('admin.jobs')->with('success', 'Job added successfully!');
    }

    /**
     * Delete a job by its ID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteJob($id)
    {
        // Start a database transaction
        DB::beginTransaction();

        try {
            $job = Course::find($id);

            if ($job) {
                // Retrieve all applications associated with the job
                $applications = AppliedCourse::where('courseId', $id)->get();

                // Loop through each application and delete the associated resume file
                foreach ($applications as $application) {
                    if ($application->image && file_exists(public_path($application->image))) {
                        unlink(public_path($application->image)); // Delete the resume file from the server
                    }
                }

                // Now delete the application records from the database
                AppliedCourse::where('courseId', $id)->delete();

                // Delete the job itself
                $job->delete();

                // Commit the transaction if all deletions succeed
                DB::commit();

                return response()->json(['success' => true, 'message' => 'Job, related applications, and resume files deleted successfully.']);
            } else {
                // Rollback if the job wasn't found
                DB::rollBack();

                return response()->json(['success' => false, 'message' => 'Job not found.']);
            }
        } catch (\Exception $e) {
            // Rollback the transaction in case of any errors
            DB::rollBack();

            return response()->json(['success' => false, 'message' => 'Failed to delete job.', 'error' => $e->getMessage()]);
        }
    }


    /**
     * Update the active status of a job.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateStatus($id, Request $request)
    {
        $request->validate([
            'active' => 'required|boolean',  // Validate that 'active' is a boolean (0 or 1)
        ]);

        $job = Course::find($id);

        if ($job) {
            $job->active = $request->active;
            $job->save();
            return response()->json(['success' => true, 'message' => 'Job status updated successfully.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Job not found.']);
        }
    }

    public function getStats()
    {
        $currentDate = Carbon::now();
        $totalApply = AppliedCourse::count();
        $totalApplyToday = AppliedCourse::whereDate('created_at', $currentDate)->count();
        $totalEnq = Enquiry::count();
        $totalEnqToday = Enquiry::whereDate('created_at', $currentDate)->count();

        return response()->json([
            'totalApply' => $totalApply,
            'totalApplyToday' => $totalApplyToday,
            'totalEnq' => $totalEnq,
            'totalEnqToday' => $totalEnqToday
        ]);
    }

    public function editJob(Request $request, $id)
    {
        try {
            $job = Course::findOrFail($id); // Use findOrFail to handle non-existent IDs
            $job->title = $request->input('title');
            $job->details = $request->input('details');
            $job->description = $request->input('description');
            $job->exInMonth = $request->input('exInMonth');
            $job->exInYear = $request->input('exInYear');
            $job->type = $request->input('type');
            $job->save();

            return redirect()->back()->with('success', 'Job edited successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
