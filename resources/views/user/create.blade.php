@extends('layouts.master')
@section('title', "Регистрация")
@section('content')
<div class="row">
    {!! Form::model($user, ['action'=>'\App\Http\Controllers\UserController@store', 'class'=>'col-4 offset-4']) !!}
    <div class="form-group">
        {!! Form::label('login', 'Логин:') !!}
        {!! Form::text('login', '', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Пароль:') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('confirmPassword', 'Подтвердите пароль:') !!}
        {!! Form::password('confirmPassword', ['class' => 'form-control']) !!}
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <button class="btn btn-success" type="submit">Регистрация</button>
    {!! Form::close() !!}
</div>
@endsection