@extends('layouts.master')
@section('title', "Добавление инструкции")
@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <h4>
                Инструкция {{ $instruction->name }} добавлена!
            </h4>
        </div>
    </div>
@endsection