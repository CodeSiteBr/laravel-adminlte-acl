@extends('layouts.admin.app')
@section('title', trans('admin.profile.edit'))
@section('content')

@include('includes.alerts')

<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<section class="content">
    <div class="box">

        <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="box-header with-border">
                <h3 class="box-title">
                    <i class='fa fa-pencil'></i> @lang('admin.profile.edit')
                </h3>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label for="name"><span class="text-danger">*</span> Name</label>
                    <input type="text" value="{{ auth()->user()->name }}" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email"><span class="text-danger">*</span> Email</label>
                    <input type="email" value="{{ auth()->user()->email }}" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <input type="password" name="current_password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>

                <div class="form-group">
                    @if(auth()->user()->image != null)
                        <img src="{{ url('storage/users/' . auth()->user()->image) }}" alt="{{ auth()->user()->name }}" style="max-width: 50px;">
                    @endif

                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
            </div>

            <div class="box-footer">
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i> @lang('admin.save')
                    </button>

                    <a href="{{ route('home') }}" class="btn btn-default">
                        <i class="fa fa-undo"></i> @lang('admin.return')
                    </a>
                </div>
            </div>

        </form>

    </div>
</section>

@endsection
