@extends('layouts.master')
@section('title', "Поиск")
@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <h4>Поиск "{{ $search }}"</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table cellpadding="4"  cellspacing="0">
                <col width="25%">
                <col width="25%">
                <col width="25%">
                <col width="25%">
                <tr class="bg-secondary">
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Автор</th>
                    <th>Файл</th>
                </tr>    
                @foreach ($instructions as $instruction)
                    <tr onclick="document.location = '{{ route('instruction.show', ['instruction'=>$instruction]) }}';">
                        <td>{{ $instruction->name }}</td>
                        <td>{{ $instruction->description }}</td>
                        <td>{{ $users[$instruction->userId] }}</td>
                        <td>{{explode('-',$instruction->filePath)[1] }}</td>
                    </tr> 
                @endforeach
            </table>
        </div>
    </div>
@endsection