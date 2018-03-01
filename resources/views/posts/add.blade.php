@extends('posts.layoutposts')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@section('add')
    <div class="card-body">
        <div class="alert-danger">
            @if(count($errors)>0)
                {{--{{ dump($errors) }}--}}Ошибка!
                @foreach($errors->all() as $error)
                    {{$error}}
                @endforeach
            @endif
        </div>

        <form action="/" method="POST">
            @csrf
            <div class="form-group row">
                <label for="text" class="col-sm-4 col-form-label text-md-right">Название</label>

                <div class="col-md-6">

                    <input name="title"><br>
                </div>
            </div>
            <div class="form-group row">
                <label for="text" class="col-sm-4 col-form-label text-md-right"> Текст</label>
                <div class="col-md-6">
                    <textarea name="body" type="text" rows="10"></textarea><br>
                </div>
            </div>
            <input type="submit" value="Отправить">
        </form>
    </div>

    @endsection