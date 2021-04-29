@extends('dashboard-layouts.layouts')

@section('title')
    Job Table
@endsection

@section('content')
    <!--maincontent-->
{{--    <div class="mainWrap navslide">--}}
{{--        <div class="ui equal width left aligned padded grid stackable">--}}
            <!--Site Content-->
            <!--Site Content-->

            <div class="right floated column">

            </div>
            <div class="right floated column">

            </div>
            <div class="right floated column">

            </div>
            <div class="right floated column">

            </div>

            <div class="right floated column">
                <a href="{{route('job.create')}}"><button class="ui green basic button">
                        <i class="tags icon"></i>
                        Add New Job
                    </button></a>
            </div>
            {{--                <div class="right floated column"></div>--}}
            {{--            <button class="ui green button right floated">Green</button>--}}
            <div class="row">
                <div class="sixteen wide column">
                    <div class="ui segments">
                        <div class="ui segment">
                            <h5 class="ui header">
                                Category Data Table
                            </h5>
                        </div>
                        <div class="ui segment">
                            <table id="data_table" class="ui compact selectable striped celled table tablet stackable" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Job Title</th>
                                    <th>Job Category</th>
                                    <th>Job Company</th>
                                    <th>Job Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($jobs as $job)
                                    <tr>
                                        <td>{{$job->job_title}}</td>
                                        <td>{{$job->categories->category_name}}</td>
                                        <td>{{$job->job_company}}</td>
                                        <td><img src="{{asset("uploads/images/$job->job_image")}}" style="height: 90px; width:90px;"></td>
                                        <td>
                                            <a href="{{ route('job.edit', $job->id) }}"><button class="ui blue basic button">
                                                    <i class="edit icon"></i>
                                                    Edit Job
                                                </button></a>
                                            <a onclick="event.preventDefault();
                                                document.getElementById('delete-form-{{$job->id}}').submit();">
                                                <button class="ui red basic button">
                                                    <i class="erase icon"></i>
                                                    Delete Job
                                                </button>
                                                <form id="delete-form-{{$job->id}}"
                                                      action="{{ route('job.delete', $job->id) }}" method="POST"
                                                      class="d-none">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="id" value="{{$job->id}}">
                                                </form>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
{{--        </div>--}}
{{--    </div>--}}
    <!--maincontent-->
@endsection

@section('js')
    <script src="{{asset('dashboard/assets/plugins/cookie/js.cookie.js')}}"></script>
    <script src="{{asset('dashboard/assets/plugins/nicescrool/jquery.nicescroll.min.js')}}"></script>

    <script data-pace-options='{ "ajax": false }' src="{{asset('dashboard/assets/plugins/pacejs/pace.js')}}"></script>
    <script src="{{asset('dashboard/assets/plugins/datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/customjs/custom-datatable.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/main.js')}}"></script>

@endsection





