@extends('dashboard-layouts.layouts')

@section('title')
    Admin Table
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


        <div class="right floated column">
            <a href="{{route('admin.create')}}"><button class="ui green basic button">
                    <i class="icon user"></i>
                    Add New Admin
                </button></a>
        </div>
            <div class="row">
            <div class="sixteen wide column">
                <div class="ui segments">
                    <div class="ui segment">
                        <h5 class="ui header">
                            Admin Data Table
                        </h5>
                    </div>
                    <div class="ui segment">
                        <table id="data_table" class="ui compact selectable striped celled table tablet stackable" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
{{--                                <th>Country</th>--}}
{{--                                <th>Email</th>--}}
{{--                                <th>Salary</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($admins as $admin)
                            <tr>
                                <td>{{$admin->name}}</td>
                                <td>{{$admin->email}}</td>
                                <td>
                                    <a href="{{ route('admin.edit', $admin->id) }}"><button class="ui blue basic button">
                                            <i class="edit icon"></i>
                                            Edit Admin
                                        </button></a>
{{--                                    <button class="ui circular blue icon button" href="{{ route('admin.edit', $admin->id) }}"> <i class="edit icon"></i></button>--}}
                                         <a onclick="event.preventDefault();
                                             document.getElementById('delete-form-{{$admin->id}}').submit();">
                                             <button class="ui red basic button">
                                                 <i class="remove user icon"></i>
                                                 Delete Admin
                                             </button>
                                             <form id="delete-form-{{$admin->id}}"
                                                   action="{{ route('admin.delete', $admin->id) }}" method="POST"
                                                   class="d-none">
                                                 @csrf
                                                 @method('DELETE')
                                                 <input type="hidden" name="id" value="{{$admin->id}}">
                                             </form>
                                         </a>
                                </td>
{{--                                <td>Lithuania</td>--}}
{{--                                <td>nec.mauris@dolorsit.net</td>--}}
{{--                                <td>$1959.78</td>--}}
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





