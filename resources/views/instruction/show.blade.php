@extends('layouts.master')
@section('title', "Инструкция")
@section('content')
    <div class="row">
        <h3 class="col-12">
            {{$instruction->name}} от {{$user->login}}
        </h3>
    </div>
    <div class="row">
        <h4 class="col-12">
            {{$instruction->description}}
        </h4>
    </div>
    <div class="row">
        <div class="col-12">
            <iframe class="unselectable w-100" src="{{asset($instruction->filePath)}}" scrolling="auto"></iframe>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            @if (session('user'))
                <a class="btn btn-success" href="{{asset($instruction->filePath)}}" download>Скачать</a>
                <a class="btn btn-warning" href="{{route('claim.create', ['instructionId'=>$instruction->id])}}" >Пожаловаться</a>
            @else
                <h3>Зарегистрируйтесь, чтобы скачать файл</h3>
            @endif
        </div>
    </div>
@endsection