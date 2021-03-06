@extends('layouts.admin.app')
@section('title', trans('admin.profile.edit'))
@section('content')

@include('includes.alerts')

<section class="content-header">
    <h1><i class='fa fa-pencil'></i> @lang('admin.profile.edit')</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><i class='fa fa-pencil'></i> @lang('admin.profile.edit')</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-3">
            <div class="box box-default">
                <div class="box-body">
                    @if(!is_null(auth()->user()->image) && file_exists( public_path(). '/storage/users/' . auth()->user()->image ))
                        <img class="img-responsive thumbnail" src="{{ asset('storage/users/' . auth()->user()->image) }}" alt="{{ auth()->user()->name }}">
                    @else
                        <img class="img-responsive thumbnail" src="{{ asset('img/no-user.png') }}" alt="{{ auth()->user()->name }}">
                    @endif

                    <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>

                    {{-- <p class="text-muted text-center">Software Engineer</p>

                    <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

                    <p class="text-muted">
                        B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>

                    <hr>

                    <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                    <p class="text-muted">Malibu, California</p>

                    <hr>

                    <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

                    <p>
                        <span class="label label-danger">UI Design</span>
                        <span class="label label-success">Coding</span>
                        <span class="label label-info">Javascript</span>
                        <span class="label label-warning">PHP</span>
                        <span class="label label-primary">Node.js</span>
                    </p>

                    <hr>

                    <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p> --}}
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#profile-edit" data-toggle="tab"><i class='fa fa-pencil'></i> @lang('admin.profile.edit')</a></li>
                </ul>
                <div class="tab-content">
                    <div class="active tab-pane" id="profile-edit">
                        <form class="form-horizontal" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="name"><span class="text-danger">*</span> @lang('admin.name')</label>

                                <div class="col-sm-10">
                                    <input type="text" value="{{ auth()->user()->name }}" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="email"><span class="text-danger">*</span> @lang('admin.email')</label>

                                <div class="col-sm-10">
                                    <input type="email" value="{{ auth()->user()->email }}" name="email" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="current_password">@lang('admin.current_password')</label>

                                <div class="col-sm-10">
                                    <input type="password" name="current_password" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="password">@lang('admin.new_password')</label>

                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="password">@lang('admin.confirm_password')</label>

                                <div class="col-sm-10">
                                    <input type="password" name="password_confirmation" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="image">@lang('admin.image')</label>

                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
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
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('css')
    <style>
    .nav-tabs-custom>.nav-tabs>li.active {
        border-top-color: #d2d6de;
    }

    .thumbnail {
        margin-bottom: 0px;
        border-radius: 50%;
    }
    </style>
@endpush
