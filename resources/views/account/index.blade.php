@extends('home')
@section('account')


    <div class="card-body">

        <form action="{{route('profile.accountedit')}}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="text" class="col-sm-4 col-form-label text-md-right">Имя</label>

                <div class="col-md-6">

                    <input name="firstname" value="{{$account->firstname}}"><br>
                </div>
            </div>
            <div class="form-group row">
                <label for="text" class="col-sm-4 col-form-label text-md-right">Фамилия</label>
                <div class="col-md-6">
                    <input name="lastname" type="text" value="{{$account->lastname}}"><br>
                </div>
            </div>
            <div class="form-group row">
                <label for="text" class="col-sm-4 col-form-label text-md-right">Дата рождения</label>
                <div class="col-md-6">
                    <input name="birthday" type="date" value="{{$account->birthday}}"><br>
                </div>
            </div>
            <div class="form-group row">
                <label for="text" class="col-sm-4 col-form-label text-md-right">Пол</label>
                <div class="col-md-6">
                    <select value="{{$account->sex}}">
                        <option value="1">Мужской</option>
                        <option value="2">Женский</option>
                    </select>

                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <input type="submit" value="Сохранить">
                </div>
            </div>
        </form>
    </div>

    @endsection