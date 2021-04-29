@extends('dashboard-layouts.layouts')

@section('title')
    Contact Table
@endsection

@section('content')
    <!--maincontent-->
    {{--    <div class="mainWrap navslide">--}}
    {{--        <div class="ui equal width left aligned padded grid stackable">--}}
    <!--Site Content-->
    <!--Site Content-->
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
                            <th>Subject</th>
                            <th>customer Email</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $message)
                            <tr>
                                <td>{{$message->subject}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{$message->message}}</td>
                                <td>
                                    <a onclick="event.preventDefault();
                                        document.getElementById('delete-form-{{$message->id}}').submit();">
                                        <button class="ui red basic button">
                                            <i class="erase icon"></i>
                                            Delete Message
                                        </button>
                                        <form id="delete-form-{{$message->id}}"
                                              action="{{ route('contact.delete', $message->id) }}" method="POST"
                                              class="d-none">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{$message->id}}">
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
    <!--maincontent-->
@endsection

@section('js')
    <script src="{{asset('dashboard/assets/plugins/cookie/js.cookie.js')}}"></script>
    <script src="{{asset('dashboard/assets/plugins/nicescrool/jquery.nicescroll.min.js')}}"></script>

    <script data-pace-options='{ "ajax": false }' src="{{asset('dashboard/assets/plugins/pacejs/pace.js')}}"></script>
    <script src="{{asset('dashboard/assets/plugins/datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/customjs/custom-datatable.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/main.js')}}"></script>
