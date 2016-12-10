@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img class="avatar" src="/uploads/avatars/{{ $user->avatar }}">
            <h2>{{ $user->name }}'s profile</h2>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                {{ csrf_field() }}
                <label>Update profile image</label>
                <input type="file" name="avatar">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>

    <section class="form-food">
       <div class="col-md-10 col-md-offset-1">
            <form enctype="multipart/form-data" action="/food" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                  <div class="form-group"><label class="col-sm-2 control-label">Название блюда</label><input type="text" name="name"></div>
                  <div class="form-group"><label class="col-sm-2 control-label">Цена</label><input type="text" name="price"></div>
                  <div class="form-group"><label class="col-sm-2 control-label">Рисунок</label><input type="file" name="pic"></div>
                   <div class="form-group"><label class="col-sm-2 control-label">Описание</label><input type="text" name="desc"></div>
            </form>
        </div> 
    </section>
        
@foreach($foods as $food)
            <div class="row">
                <img class="avatar" src="/uploads/avatar-foods/{{ $food->avatar }}">
                <h2>{{ $user->name }}'s profile</h2>
            </div>
        @endforeach
</div>
@endsection
