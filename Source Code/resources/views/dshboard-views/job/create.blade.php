@extends('dashboard-layouts.layouts')

@section('title')
    Create New Job
@endsection

@section('content')
{{--    <div class="mainWrap navslide">--}}
        <div class="ui column centered grid">
            <!--Site Content-->
            <!--Site Content-->

            <div class="row" style="margin-top: 7%;">
                <div class="ten wide tablet ten wide computer column">
                    <div class="ui segments">
                        <div class="ui segment">
                            <h5 class="ui header">
                                Create Job Form
                            </h5>
                        </div>
                        <form class="ui form segment form1" method="POST" action="{{ route('job.store') }}" enctype="multipart/form-data">
                            @csrf
                            <p>Job Information</p>
                            <div class="two fields">
                                <div class="field">
                                    @error('job_title')
                                    <div class="ui red message">{{$message}}</div>
                                    @enderror
                                    <label>Job Title</label>
                                    <input placeholder="Job Title" name="job_title" type="text" value="{{ old('job_title') }}">
                                </div>
                                <div class="field">
                                    @error('job_category')
                                    <div class="ui red message">{{$message}}</div>
                                    @enderror
                                    <label>Job Category</label>
{{--                                    <input placeholder="Job Category Name" name="job_category" type="text" value="{{ old('job_title') }}">--}}
                                    <div class="ui dropdown selection" tabindex="0">
                                        <select name="select_category" value="{{ old('select_category') }}">
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                        <i class="dropdown icon"></i>
                                        <div class="default text">Select Job Category</div>
                                        <div class="menu transition hidden" tabindex="-1">
                                            @foreach($categories as $category)
                                            <div class="item" data-value="{{$category->id}}">{{$category->category_name}}</div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="two fields">
                                <div class="field">
                                    @error('job_company')
                                    <div class="ui red message">{{$message}}</div>
                                    @enderror
                                    <label>Job Company</label>
                                    <input placeholder="Job Company" name="job_company" type="text" value="{{ old('job_company') }}">
                                </div>
                                    <div class="field">
                                        @error('job_location')
                                        <div class="ui red message">{{$message}}</div>
                                        @enderror
                                        <label>Job Location</label>
                                        <input placeholder="Job Location" name="job_location" type="text" value="{{ old('job_location') }}">
                                    </div>
                            </div>
                            <div class="two fields">
                                <div class="field">
                                    @error('company_email')
                                    <div class="ui red message">{{$message}}</div>
                                    @enderror
                                    <label>Company Email</label>
                                    <input placeholder="Company Email" name="company_email" type="email" value="{{ old('company_email') }}">
                                </div>
                                <div class="field">
                                    @error('company_phone')
                                    <div class="ui red message">{{$message}}</div>
                                    @enderror
                                    <label>Company Phone</label>
                                    <input placeholder="Company Phone" name="company_phone" type="text" value="{{ old('company_phone') }}">
                                </div>
                            </div>
                            <div class="two fields">
                                <div class="field">
                                    @error('job_salary')
                                    <div class="ui red message">{{$message}}</div>
                                    @enderror
                                    <label>Job Salary</label>
                                    <input placeholder="Job Salary" name="job_salary" type="text" value="{{ old('job_salary') }}">
                                </div>
                                <div class="field">
                                    @error('job_image')
                                    <div class="ui red message">{{$message}}</div>
                                    @enderror
                                    <label>Job Image</label>
                                    <input placeholder="Job Category Image" name="job_image" type="file" accept="image/* value="{{ old('job_image') }}">
                                </div>
                            </div>
                            <div class="two fields">
                            <div class="field">
                                @error('job_qualification')
                                <div class="ui red message">{{$message}}</div>
                                @enderror
                                <label>Job Qualification</label>
                                <textarea placeholder="Job Qualification" name="job_qualification" type="text" >{{ old('job_qualification') }}</textarea>
                            </div>
                                <div class="field">
                                    @error('job_desc')
                                    <div class="ui red message">{{$message}}</div>
                                    @enderror
                                    <label>Job Description</label>
                                    <textarea placeholder="Job Description" name="job_desc" type="text" >{{ old('job_desc') }}</textarea>
                                </div>

                            </div>
                            <div class="field">
                                <label></label>
                                <input type="hidden">
                                <button type="submit" class="ui green setdata button">Create New Job</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
