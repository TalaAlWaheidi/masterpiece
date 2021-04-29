<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('dshboard-views.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dshboard-views.category.create');
    }

    public function validation(Request $request)
    {
        $request->validate([
            'category_name'     => 'required',
            'category_image' => 'required|mimes:jpeg,jpg,png,gif',
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
        if ($request->file('category_image')) {
            $file = $request->file('category_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/images', $filename);
        }

        $name      = request('category_name');
        Category::create([
            'category_name'  => $name,
            'category_image' => $filename,
        ]);
        return redirect()->route('category.all');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $id)
    {
        $category = $id;
        return view('dshboard-views.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $id)
    {
        $category = $id;
        $request->validate([
            'category_name'     => 'required',
        ]);

        if ($request->file('category_image')) {
            $file = $request->file('category_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/images', $filename);
        } else {
            $filename = $category->category_image;
        }
        $name      = request('category_name');

        $category = Category::find($category->id);
        $category->category_name = $name;
        $category->category_image = $filename;
        $category->save();
        return redirect()->route('category.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $id)
    {
        $id->delete();
        return redirect()->route('category.all');
    }

    public function homecat()
    {
        $category = Category::all();
        $jobs=Job::all();
        return view('public-view.public-home', compact('category','jobs'));
    }
}
