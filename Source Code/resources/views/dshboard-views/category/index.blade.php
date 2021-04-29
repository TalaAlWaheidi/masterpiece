@extends('dashboard-layouts.layouts')

@section('title')
    Category Table
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
                <a href="{{route('category.create')}}"><button class="ui green basic button">
                        <i class="tags icon"></i>
                        Add New Category
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
                                    <th>Category Name</th>
                                    <th>Category Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->category_name}}</td>
                                        <td><img src="{{asset("uploads/images/$category->category_image")}}" style="height: 90px; width:90px;"></td>
                                        <td>
                                            <a href="{{ route('category.edit', $category->id) }}"><button class="ui blue basic button">
                                                    <i class="edit icon"></i>
                                                    Edit Category
                                                </button></a>
                                            {{--                                    <button class="ui circular blue icon button" href="{{ route('admin.edit', $category->id) }}"> <i class="edit icon"></i></button>--}}
                                            <a onclick="event.preventDefault();
                                                document.getElementById('delete-form-{{$category->id}}').submit();">
                                                <button class="ui red basic button">
                                                    <i class="erase icon"></i>
                                                    Delete Category
                                                </button>
                                                <form id="delete-form-{{$category->id}}"
                                                      action="{{ route('category.delete', $category->id) }}" method="POST"
                                                      class="d-none">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="id" value="{{$category->id}}">
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





