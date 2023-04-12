@extends('layouts.master')
@section('title', "Пожаловаться")
@section('content')
<div class="row">
    {!! Form::model($claim, ['action'=>'\App\Http\Controllers\ClaimController@store', 'class'=>'col-6 offset-3']) !!}
    <div class="form-group" hidden>
        {!! Form::text('instructionId', $instructionId, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Причина:') !!}
        {!! Form::textarea('description', '', ['class' => 'form-control']) !!}
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
    <button class="btn btn-warning" type="submit">Отправить</button>
    {!! Form::close() !!}
</div>
@endsection