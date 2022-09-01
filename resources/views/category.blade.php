@extends('master')

@section('content')
    <div class="starter-template">
        <h1>
            {{$category->name}}
        </h1>
        <p>
            {{$category->description}}
        </p>
        <div class="row">
            @include('card')
        </div>
    </div>
@endsection
