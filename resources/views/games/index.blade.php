@extends('app')

@section('content')
    <h2>Games</h2>

    @if ( !$games->count() )
        You have no games
    @else
        <ul>
            @foreach( $games as $game )
                <li>{{ $game->name }}</li>
            @endforeach
        </ul>
    @endif
@endsection
