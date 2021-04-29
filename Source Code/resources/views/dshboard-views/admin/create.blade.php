@extends('dashboard-layouts.layouts')

@section('title')
   Create New Admin
@endsection

@section('content')
        <div class="ui eight wide column centered grid">

            <div class="row">
                <div class="sixteen wide column">
                    <div class="ui segments">
                        <div class="ui segment">
                            <h5 class="ui header">
                                Admin Data Table
                            </h5>
                        </div>
                        <form class="ui form segment form1" method="POST" action="{{ route('admin.store') }}">
                            @csrf
                            <p>Admin Information</p>
                            <div class="two fields">
                                <div class="field">
                                    @error('admin_name')
                                    <p class="ui red message">{{$message}}</p>
                                    @enderror
                                    <label>Name</label>
                                    <input placeholder="Admin Name" name="admin_name" type="text" value="{{ old('admin_name') }}">
                                </div>
                                <div class="field">
                                    @error('admin_email')
                                    <p class="ui red message">{{$message}}</p>
                                    @enderror
                                    <label>Email</label>
                                    <input placeholder="Email@example.com" name="admin_email" type="email" value="{{ old('admin_email') }}">
                                </div>
                            </div>
                            <div class="two fields">
                                <div class="field">
                                    @error('password')
                                    <p class="ui red message">{{$message}}</p>
                                    @enderror
                                    <label>Password</label>
                                    <input placeholder="ab**c12345" name="password" type="password">
                                </div>
                                <div class="field">
                                    @error('is_admin')
                                    <p class="ui red message">{{$message}}</p>
                                    @enderror
                                    <label></label>
                                    <div class="ui segment">
                                        <div class="ui checkbox">
                                            <input type="checkbox" name="is_admin" value="1">
                                            <label>Admin</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label></label>
                                <input type="hidden">
                                <button type="submit" class="ui green setdata button">Create Admin</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
