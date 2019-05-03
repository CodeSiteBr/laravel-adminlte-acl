@extends('layouts.app')
@section('title', 'Home')
@section('content')

<div class="container">
    @include('includes.alerts')

    <form action="{{ route('avatar.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="avatar" id="avatar" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
            <button type="submit" class="btn btn-success ml-4">Upload</button>
        </div>
    </form>

    <div class="card-columns">
        @foreach ($avatars as $avatar)
        <div class="card">
            <img src="{{$avatar->getUrl('card')}}" class="card-img-top" alt="Card image cap">
            <div class="card-body">
                <div class="float-left">
                <a href="#" onclick="event.preventDefault();document.getElementById('selectForm{{$avatar->id}}').submit()"><i class="text-success fas fa-check fa-2x"></i></a>

                    <form action="{{route('avatar.update', auth()->id())}}"
                    style="display:none" id="selectForm{{$avatar->id}}" method="POST">
                        @csrf
                        @method('put')
                    <input type="hidden" type="submit" name="selectedAvatar" value="{{$avatar->id}}">
                    </form>

                    <a href="#"><i class="text-danger fas fa-trash fa-2x"></i></a>
                </div>

                <div class="float-right">
                    <a href="#"><i class="text-info fas fa-eye fa-2x"></i></a>
                    <a href="#"><i class="text-warning fas fa-cloud-download-alt fa-2x"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
