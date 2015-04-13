@extends('layouts.main')
@section('content')
    {!! Form::open(['url' => '/login']) !!}
        <div>
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email') !!}
        </div>
        <div>
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password') !!}
        </div>
        {!! Form::submit('Login') !!}
    {!! Form::close() !!}
@stop