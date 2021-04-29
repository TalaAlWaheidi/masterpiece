@extends('dashboard-layouts.layouts')

@section('title')
    Applied Table
@endsection

@section('content')
    <!--maincontent-->
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

    <div class="row">
        <div class="sixteen wide column">
            <div class="ui segments">
                <div class="ui segment">
                    <h5 class="ui header">
                        Applied Data Table
                    </h5>
                </div>
                <div class="ui segment">
                    <table id="data_table" class="ui compact selectable striped celled table tablet stackable" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Job name</th>
                            <th>Desability</th>
                            <th>CV</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($applied as $apply)
                            <tr>
                                <td>{{$apply->name}}</td>
                                <td>{{$apply->email}}</td>
                                <td>{{$apply->phone}}</td>
                                <td>{{$apply->applyjob->job_title}}</td>
                                <td>{{$apply->desability}}</td>
                                <td> <a href="{{asset("uploads/images/$apply->CV")}}">{{ $apply->name }} CV's</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
<!--maincontent-->

@section('js')
    <script src="{{asset('dashboard/assets/plugins/cookie/js.cookie.js')}}"></script>
    <script src="{{asset('dashboard/assets/plugins/nicescrool/jquery.nicescroll.min.js')}}"></script>
    <script data-pace-options='{ "ajax": false }' src="{{asset('dashboard/assets/plugins/pacejs/pace.js')}}"></script>
    <script src="{{asset('dashboard/assets/plugins/datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/customjs/custom-datatable.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/main.js')}}"></script>
@endsection





