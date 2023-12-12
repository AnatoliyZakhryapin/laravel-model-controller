@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row row-gap-3">
            @foreach($movies as $movie)
                <div class="col-3">
                    @include('partials.card')
                </div>
            @endforeach
        </div>
    </div>  

@endsection