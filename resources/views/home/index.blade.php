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
                    <h4>Usuários para teste</h4>

                    <p>ADMIN</p>
                    <p>Usuario: admin@admin.com</p>
                    <p>Senha: 123456</p>

                    <p>USER</p>
                    <p>Usuario: user@user.com</p>
                    <p>Senha: 123456</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
