<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Category;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::Paginate(15);
        return view('dshboard-views.job.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('dshboard-views.job.create', compact('categories'));
    }

    public function validation($request)
    {
        $request->validate([
            'job_title'        => 'required',
            'select_category'  => 'required',
            'job_company'      => 'required',
            'job_location'     => 'required',
            'job_desc'         => 'required',
            'job_salary'       => 'required',
            'company_email'    => 'required|email',
            'company_phone'    => 'required|numeric|min:10',
            'job_qualification' => 'required',
            'job_image'        => 'required|mimes:jpeg,jpg,png,gif',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);
        if ($request->file('job_image')) {
            $file = $request->file('job_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/images', $filename);
        }



        $jobs = new Job;
        $jobs->category_id = $request->input('select_category');
        $jobs->job_title = $request->input('job_title');
        $jobs->job_company = $request->input('job_company');
        $jobs->job_desc = $request->input('job_desc');
        $jobs->job_location = $request->input('job_location');
        $jobs->job_salary = $request->input('job_salary');
        $jobs->job_qualification = $request->input('job_qualification');
        $jobs->company_email=$request->input('company_email');
        $jobs->company_phone=$request->input('company_phone');
        $jobs->job_image = $filename;
        $jobs->save();

        return redirect()->route('job.all');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $id)
    {
        $job = $id;
        $categories = Category::all();
        return view('dshboard-views.job.edit', compact('job', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $id)
    {
        $job = $id;
        if ($request->file('job_image')) {
            $file = $request->file('job_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/images', $filename);
        } else {
            $filename = $job->job_image;
        }
        $name      = request('category_name');

        $job = Job::find($job->id);
        $job->category_id = $request->input('select_category');
        $job->job_title = $request->input('job_title');
        $job->job_company = $request->input('job_company');
        $job->job_desc = $request->input('job_desc');
        $job->job_location = $request->input('job_location');
        $job->job_salary = $request->input('job_salary');
        $job->job_qualification = $request->input('job_qualification');
        $job->company_email=$request->input('company_email');
        $job->company_phone=$request->input('company_phone');
        $job->job_image = $filename;
        $job->save();
        return redirect()->route('job.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $id)
    {
        $id->delete();
        return redirect()->route('job.all');
    }

    public function categoryjob($id)
    {
        $jobs = Category::find($id)->jobs;
        //        dd($jobs);
        $categories = Category::find($id);
        // $jobs = Job::where('id', '=', $id)->get();
        return view('public-view.category-job', compact('jobs', 'categories'));
    }

    public function details($id)
    {
        $jobs = job::where('id', '=', $id)->get()->first();
        return view('public-view.job-details', compact('jobs'));
    }

    public function showall(Job $job)
    {
        //        $category = Category::all();
        $job = Job::all();
        $categories = Category::all();
        return view('public-view.all-jobs', compact('job', 'categories'));
    }

    public function Search()
    {
        $search=$_GET['select'];
        $searchtitle=$_GET['title'];

        $result=Job::where('job_location','like','%'.$search.'%')->where('job_title','like','%'.$searchtitle.'%')->paginate(10);
        return view('public-view.search',compact('result'));
    }
}
