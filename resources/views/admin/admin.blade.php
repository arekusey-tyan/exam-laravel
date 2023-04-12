@extends('layouts.master')
@section('title', "Панель администратора")
@section('content')
    <hr>
    <div class="row">
        <h4 class="col-12 text-center">
            Пользователи
        </h4>
    </div>
    <div class="row">
        <div class="col-12">
            <table cellpadding="4"  cellspacing="0">
                <col width="30%">
                <col width="30%">
                <col width="30%">
                <col width="10%">
                <tr class="bg-secondary">
                    <th>Логин</th>
                    <th>Статус</th>
                    <th>Действие</th>
                    <th>X</th>
                </tr>    
                @foreach ($users as $user)
                    @if ($user->login != 'admin')    
                        <tr>
                            <td>{{ $user->login}}</td>
                            @if ($user->locked)
                                <td>Заблокирован</td>
                                <td>
                                    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="post">
                                        @csrf
                                        @method('put')
                                            <input type="number" name="locked" value="0" hidden>
                                            <button class="sub"  type="submit">Разблокировать</button>
                                        </form>
                                </td>
                            @else
                                <td>Активен</td>
                                <td>
                                    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="post">
                                        @csrf
                                        @method('put')
                                            <input type="number" name="locked" value="1" hidden>
                                            <button class="sub"  type="submit">Заблокировать</button>
                                        </form>
                                </td>
                            @endif
                            <td>
                                <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                        <button class="sub"  type="submit"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                    @endif
                @endforeach
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <h4 class="col-12 text-center">
            Инструкции
        </h4>
    </div>
    <div class="row">
        <div class="col-12">
            <table cellpadding="5"  cellspacing="0">
                <col width="25%">
                <col width="25%">
                <col width="20%">
                <col width="20%">
                <col width="10%">
                <tr class="bg-secondary">
                    <th>Название</th>
                    <th>Автор</th>
                    <th>Статус</th>
                    <th>Действие</th>
                    <th>X</th>
                </tr>    
                @foreach ($instructions as $instruction)
                    <tr>
                        <td><a class="link" href="{{route('instruction.show', ['instruction'=>$instruction])}}">{{ $instruction->name }}</a></td>
                        @foreach ($users as $user)
                            @if ($user->id == $instruction->userId)
                                <td>{{$user->login}}</td>
                            @endif
                        @endforeach
                        @if ($instruction->verified)
                            <td>Одобрено</td>
                            <td>
                                <form action="{{ route('instruction.update', ['instruction' => $instruction->id]) }}" method="post">
                                    @csrf
                                    @method('put')
                                        <input type="number" name="verified" value="0" hidden>
                                        <button class="sub"  type="submit">Заблокировать</button>
                                    </form>
                            </td>
                        @else
                            <td>Не одобрено</td>
                            <td>
                                <form action="{{ route('instruction.update', ['instruction' => $instruction->id]) }}" method="post">
                                    @csrf
                                    @method('put')
                                        <input type="number" name="verified" value="1" hidden>
                                        <button class="sub"  type="submit">Одобрить</button>
                                    </form>
                            </td>
                        @endif
                        <td>
                        <form action="{{ route('instruction.destroy', ['instruction' => $instruction->id]) }}" method="post">
                            @csrf
                            @method('delete')
                                <button class="sub"  type="submit"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr> 
                @endforeach
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <h4 class="col-12 text-center">
            Жалобы
        </h4>
    </div>
    <div class="row">
        <div class="col-12">
            <table cellpadding="4"  cellspacing="0">
                <col width="30%">
                <col width="30%">
                <col width="30%">
                <col width="10%">
                <tr class="bg-secondary">
                    <th>Инструкция</th>
                    <th>Автор жалобы</th>
                    <th>Жалоба</th>
                    <th>X</th>
                </tr>    
                @foreach ($claims as $claim)
                    <tr>
                        @foreach ($instructions as $instruction)
                            @if ($instruction->id == $claim->instructionId)
                                <td><a class="link" href="{{route('instruction.show', ['instruction'=>$instruction])}}">{{ $instruction->name }}</a></td>
                            @endif
                        @endforeach
                        @foreach ($users as $user)
                            @if ($user->id == $claim->userId)
                                <td>{{ $user->login }}</td>
                            @endif
                        @endforeach
                        <td>{{ $claim->description }}</td>
                        <td>
                            <form action="{{ route('claim.destroy', ['claim' => $claim->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                    <button class="sub"  type="submit"><i class="fas fa-trash"></i></button>
                                </form>
                        </td>
                    </tr> 
                @endforeach
            </table>
        </div>
    </div>
    <hr>
@endsection