@extends('layouts.app')
@section('title', '| Home')
@section('content')

<div class="container">
    @include('includes.alerts')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>
                        <i class='fa fa-cog'></i> Admin

                        <a class="btn btn-sm btn-dark" href="{{ route('admin.users.index') }}" class="btn btn-default pull-right">
                            @lang('user.users')
                        </a>

                        <a class="btn btn-sm btn-dark" href="{{ route('admin.roles.index') }}" class="btn btn-default pull-right">
                            @lang('user.roles')
                        </a>

                        <a class="btn btn-sm btn-dark" href="{{ route('admin.permissions.index') }}" class="btn btn-default pull-right">
                            @lang('user.permissions')
                        </a>
                    </h1>
                </div>

                <div class="card-body">
                    <h3>Bem-vindo </h3>
                    <p>{{ Auth::user()->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
