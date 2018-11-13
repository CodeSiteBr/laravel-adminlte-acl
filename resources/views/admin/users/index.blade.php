@extends('layouts.admin.app')

@section('title', trans('admin.users.list'))

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
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-users"></i> @lang('admin.users.list')</h3>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>@lang('admin.name')</th>
                            <th>@lang('admin.email')</th>
                            <th>@lang('admin.created_at')</th>
                            <th>@lang('admin.user_roles')</th>
                            <th>@lang('admin.operations')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                            <td>{{ $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to
                            a user and convert to string --}}

                            <td>
                                <div class="form-row">
                                    <div class="col-auto">
                                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-primary pull-left"><i class="fa fa-pen"></i> @lang('admin.edit')</a>
                                    </div>
                                    <div class="col-auto">
                                        {!! Form::open([
                                            'method' => 'DELETE',
                                            'onsubmit' => "return confirm('".trans("admin.confirm")."');",
                                            'route' => ['admin.users.destroy', $user->id]
                                        ]) !!}

                                        {!! Form::button('<i class="fa fa-trash"></i> ' . trans("admin.delete"), ['type'=>'submit' ,'class' => 'btn btn-sm btn-danger']) !!}

                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>

        <div class="box-footer">
            <a href="{{ route('admin.users.create') }}" class="btn btn-success"><i class="fa fa-user-plus"></i> @lang('admin.users.create')</a>
        </div>
    </div>
</section>

@endsection
