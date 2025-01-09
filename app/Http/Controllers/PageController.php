<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\JobController;
use App\Models\AppliedJob;
use App\Models\Enquiry;
use App\Models\Job;

class PageController extends Controller
{
    public function Report()
    {
        $data = Enquiry::all();
        if($data){
            return view('Admin.Report',['data'=>$data]);
        }
        else{
            return view('Admin.Report',['data'=>'no Data found']);
        }

    }
    public function job()
    {
        $data = Job::all();
        $total = Job::count();
        $totalApplied = AppliedJob::count();

        return view('Admin.Job', ['data' => $data, 'total' => $total, 'totalApplied' => $totalApplied]);
    }
    public function signIn()
    {
        return view('Admin.loginPage');
    }
    public function signUp()
    {
        return view("Admin.signUp");
    }
    public function home()
    {
        return view('website.welcome');
    }
    public function company()
    {
        return view('company');
    }
    public function aboutTardus()
    {
        return view('company');
    }
    public function whyChooseUs()
    {
        return view('company');
    }
    public function methodology()
    {
        return view('company');
    }

    public function services()
    {
        return view('services');
    }
    public function solutions()
    {
        return view('solutions');
    }
    public function industries()
    {
        return view('industries');
    }
    public function career()
    {
        $data = Job::where('active', 1)->get();

        if ($data->isEmpty()) {
            return view('career', [
                'data' => [],
                'message' => 'There are no jobs available at the moment.'
            ]);
        } else {
            return view('career', ['data' => $data]);
        }
    }

    public function applyJob($id)
    {
        $data = Job::find($id);

        if (!$data) {
            return view('applyJob', [
                'data' => null,
                'message' => 'The job has expired.'
            ]);
        }

        return view('applyJob', ['data' => $data]);
    }


    public function dashboard()
    {
        return view('Admin.index');
    }
    public function jobForm()
    {
        return view('Admin.upload-job');
    }
    public function jobView($id)
    {
        $job = Job::find($id);
        if (!$job) {
            return redirect()->route('jobs.index')->with('error', 'Job not found.');
        }
        return view('Admin.show-job', ['job' => $job]);
    }

    public function candidateProfile($id)
    {
        $candidate = AppliedJob::find($id);

        if ($candidate) {
            return view('Admin.view-candidate', [
                'data' => $candidate,
            ]);
        } else {
            abort(404, 'Candidate not found');
        }
    }
    public function settings(){
        return view('Admin.setting');
    }
    public function editJob($id){
        $data = Job::find($id);
        return view('Admin.components.edit',['data'=>$data]);
    }
}
