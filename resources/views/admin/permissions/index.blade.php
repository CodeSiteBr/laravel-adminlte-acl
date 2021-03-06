@extends('layouts.admin.app')
@section('title', trans('admin.permissions.list'))
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
            <h3 class="box-title">
                <i class="fa fa-briefcase"></i>
                @lang('admin.permissions.list')
            </h3>
        </div>

        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>@lang('admin.permissions')</th>
                            <th>@lang('admin.operations')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
                        <tr>
                            <td>{{ $permission->name }}</td>
                            <td>
                                <div class="form-row">
                                    <div class="col-auto">
                                        <a href="{{ route('admin.permissions.edit', $permission->id) }}" class="btn btn-sm btn-warning pull-left">
                                            <i class="fa fa-pencil"></i> @lang('admin.edit')
                                        </a>
                                    </div>
                                    <div class="col-auto">
                                        {!! Form::open([
                                            'method' => 'DELETE',
                                            'onsubmit' => "return confirm('".trans("admin.confirm")."');",
                                            'route' => ['admin.permissions.destroy', $permission->id]
                                        ]) !!}

                                        {!! Form::button('<i class="fa fa-trash"></i> ' . trans("admin.delete"),
                                        ['type'=>'submit' ,'class' => 'btn btn-sm btn-danger']) !!}

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
            <a href="{{ route('admin.permissions.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> @lang('admin.permissions.create')</a>
        </div>
    </div>
</section>

@endsection
