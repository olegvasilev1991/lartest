@extends('home')
@section('edit')

    <div class="card-body">

    <form method="post" action="/edit">
        <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label text-md-right">Имя</label>

            <div class="col-md-6">

        <input name="firstname"><br>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label text-md-right"> Фамилия</label>
            <div class="col-md-6">
        <input name="lastname"><br>
    </div>
    </div>

    <div class="form-group row">

        <label for="email" class="col-sm-4 col-form-label text-md-right"> Дата рождения</label>
        <div class="col-md-6">
        <input name="birthday" type="date"><br>
    </div>
    </div>
        <div class="form-group row">

                <label for="email" class="col-sm-4 col-form-label text-md-right">  Пол</label>
            <div class="col-md-6">
                <select name="sex">
                    <option value="1">Мужской</option>
                    <option value="2">Женский</option>
                </select><br>
            </div>
        </div>
        <input type="submit" value="Отправить">
    </form>
    </div>


@endsection