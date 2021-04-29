<?php

namespace App\Http\Controllers;

use App\Models\Applied;
use App\Models\Job;
use Illuminate\Http\Request;

class AppliedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $job = Job::find($id);
        return view('public-view.applied-job', compact('job'));
    }

    public function validation(Request $request)
    {
        $request->validate([
            'name'       => 'required',
            'email'      => 'email|required',
            'phone'      => 'required',
            'desability' => 'required',
            //            'select'     => 'required',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validation($request);
        if ($request->file('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/images', $filename);
        }

        if ($request->file('CV')) {
            $file = $request->file('CV');
            $ext = $file->getClientOriginalExtension();
            $filenamee = time() . '.' . $ext;
            $file->move('uploads/images', $filenamee);
        }
        $id = Job::find($id);

        Applied::create([
            'name'        => request('name'),
            'desability'  => request('desability'),
            'email'       => request('email'),
            'phone'       => request('phone'),
            'job_id'      => request('job_id'),
            'CV'          => $filenamee,
            'image'       => $filename,
        ]);
        return redirect()->route('publicjob.all');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Applied  $applied
     * @return \Illuminate\Http\Response
     */
    public function show(Applied $applied)
    {
        $applied = Applied::Paginate(15);
        //        'applies' => DB::table('applies')->paginate(15)
        //            'users' => DB::table('users')->paginate(15)
        //        'applies' => DB::table('applies')->paginate(15);
        return view('dshboard-views.applied.index', compact('applied'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Applied  $applied
     * @return \Illuminate\Http\Response
     */
    public function edit(Applied $applied)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Applied  $applied
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applied $applied)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applied  $applied
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applied $applied)
    {
        //
    }
}
