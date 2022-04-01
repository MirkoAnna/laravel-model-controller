@extends('layouts.base')

@section('pageTitle', 'Movies')

@section('content')

    <ul>
        @foreach ($movies as $movie)
        
        <li>
            
            {{ $movie->id }}.
            <b>{{ $movie->title }}</b>
            ({{ $movie->original_title }}), 
            {{ $movie->nationality }}
            {{ $movie->date }}
            Voto: {{ $movie->vote }}
                
        </li>

        @endforeach
    </ul>
@endsection