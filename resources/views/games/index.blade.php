@extends('app')

@section('content')

    <div id="app">
        {{ Form::open(array('url' => '/games')) }}

        <div class="form-group" style="width:400px;">
            {!! Form::label('game', 'Game:') !!}
            {!! Form::select('game_id', $games, null, ['class' => 'form-control', 'v-model' => 'selected']) !!}

            <div v-if="selected=='Pick-X Daily' || selected=='Pick-X Time'">
                {!! Form::label('digit_label', 'Number of Digits:') !!}
                {!! Form::select('num_digits', ['1' => '1','2' => '2','3' => '3','4' => '4'], null,
                ['class' => 'form-control']) !!}
            </div>
            <br/>

            <div v-if="selected">
                {!! Form::submit('Generate Numbers!', ['type' => 'button',
                'v-on:click.prevent' => 'doSubmit', 'class' => 'btn-primary']) !!}
            </div>

        </div>


        {{ Form::close() }}
    </div>

    <script type="text/javascript" src="/js/app.js"></script>

@endsection
