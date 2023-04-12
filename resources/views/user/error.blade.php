@extends('layouts.master')
@section('title', "Ошибка")
@section('content')
    <div class="row">
        <div class="col-12">
            <h3 class="text-danger">{{$message}}</h3>
        </div>
    </div>
@endsection