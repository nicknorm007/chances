@extends('app')

@section('content')

    <div class="form-group" style="width:400px;">
        {!! Form::label('game', 'Game:') !!}
        {!! Form::select('game_id', $games, null, ['class' => 'form-control']) !!}
    </div>


@endsection
