<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @section('title')
            Admin
            @show
    </title>

    @include('layouts.admin.partials.stylesheet')

    @section('headSection')
        @show
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        @include('layouts.admin.partials.topbar')

        @include('layouts.admin.partials.sidebar')

        @include('layouts.admin.partials.content')

        @include('layouts.admin.partials.footer')

        @include('layouts.admin.partials.control')

        <!-- Adicione o plano de fundo da barra lateral. Esta div deve ser colocado imediatamente após a barra lateral de controle -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    @include('layouts.admin.partials.javascript')

    @section('footerSection')
        @show
</body>

</html>
