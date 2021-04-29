@extends('dashboard-layouts.layouts')

@section('title')
    Update Category
@endsection

@section('content')
    <div class="mainWrap navslide">
        <div class="ui eight wide column centered grid">
            <!--Site Content-->
            <!--Site Content-->

            <div class="row" style="margin-top: 7%;">
                <div class="ten wide tablet ten wide computer column">
                    <div class="ui segments">
                        <div class="ui segment">
                            <h5 class="ui header">
                                Edit Category Form
                            </h5>
                        </div>
                        <form class="ui form segment form1" method="POST" action="{{ route('category.update',$category->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <p>Category Information</p>
                            <div class="two fields">
                                <div class="field">
                                    @error('category_name')
                                    <div class="ui red message">{{$message}}</div>
                                    @enderror
                                    <label>Job Category Name</label>
                                    <input placeholder="Job Category Name" name="category_name" type="text" value="{{ $category->category_name }}">
                                </div>
                                <div class="field">
                                    @error('category_image')
                                    <div class="ui red message">{{$message}}</div>
                                    @enderror
                                    <label>Job Category Image</label>
                                    <input placeholder="Job Category Image" name="category_image" type="file" accept="image/*>
                                </div>
                            </div>
                            <div class="field">
                                <label></label>
                                <input type="hidden">
                                <button type="submit" class="ui green setdata button">Update Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
