@extends('dashboard-layouts.layouts')

@section('title')
    Create New Admin
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
                                Update Admin Form
                            </h5>
                        </div>
                        <form class="ui form segment form1" method="POST" action="{{ route('admin.update', $admin->id) }}">
                            @csrf
                            @method('PUT')
                            <p>Edit Admin Information</p>
                            <div class="two fields">
                                <div class="field">
                                    @error('admin_name')
                                    <div class="ui red message">{{$message}}</div>
                                    @enderror
                                    <label>Name</label>
                                    <input placeholder="Admin Name" name="admin_name" type="text" value="{{ $admin->admin_name }}">
                                </div>
                                <div class="field">
                                    @error('admin_email')
                                    <div class="ui red message">{{$message}}</div>
                                    @enderror
                                    <label>Email</label>
                                    <input placeholder="Email@example.com" name="admin_email" type="email" value="{{ $admin->admin_email }}">
                                </div>
                            </div>
                            <div class="two fields">
                                <div class="field">
                                    @error('password')
                                    <div class="ui red message">{{$message}}</div>
                                    @enderror
                                    <label>Password</label>
                                    <input placeholder="ab**c12345" name="password" type="password">
                                </div>
                                <div class="field">
                                    <label></label>
                                    <input placeholder="ab**c12345" type="hidden">
                                </div>
                            </div>
                            <div class="field">
                                <label></label>
                                <input type="hidden">
                                <button type="submit" class="ui green setdata button">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
