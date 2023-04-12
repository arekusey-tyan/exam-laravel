@extends('layouts.master')
@section('title', "Добавление инструкции")
@section('content')
    <div class="row">
        {!! Form::model($instruction, ['action'=>'\App\Http\Controllers\InstructionController@store', 'class'=>'col-6 offset-3', "files" => true]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Название:') !!}
            {!! Form::text('name', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Описание:') !!}
            {!! Form::textarea('description', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('filePath', 'Файл:') !!}
            {!! Form::file('filePath', ['class' => 'form-control', 'accept' => ".txt"]) !!}
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
        <button class="btn btn-success" type="submit">Добавить</button>
        {!! Form::close() !!}
    </div>
@endsection