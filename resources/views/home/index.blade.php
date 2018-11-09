@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container">
    @include('includes.alerts')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1><i class='fa fa-home'></i> Home</h1>
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
