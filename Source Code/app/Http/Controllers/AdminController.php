<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::where('is_admin','=',1)->get();
//        dd($admins);
        return view('dshboard-views.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dshboard-views.admin.create');
    }

    public function validation(Request $request)
    {
        $request->validate([
            'admin_email'    => 'required|email',
            'admin_name'     => 'required',
            'password'       => 'required|',
            'is_admin'       => 'required|',
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
        User::create([
            'name' => $request->admin_name,
            'email' => $request->admin_email,
            'password' => Hash::make($request->password),
            'is_admin' => $request->input('is_admin'),
        ]);
        return redirect()->route('admin.all');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $id)
    {
        $admin = $id;
        return view('dshboard-views.admin.edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $id)
    {
        $this->validation($request);
        if ($request->password){
            $password = Hash::make($request->password);
        }
        else{
            $password = $id->password;
        }
        $id->update([
            'name' => $request->admin_name,
            'email' => $request->admin_email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('admin.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $id)
    {
        $id->delete();
        return redirect()->route('admin.all');
    }
}
