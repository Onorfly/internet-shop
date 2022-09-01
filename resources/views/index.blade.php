@extends('master')

@section('title', 'Главная')

@section('content')
    <div class="starter-template">
        <p class="alert alert-success">The Project was reset</p>

        <div class="row">
            @include('card')
        </div>
    </div>
@endsection


