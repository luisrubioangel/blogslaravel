@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Asignar un rol</h1>
@stop

@section('content')
<p>Welcome to this bsssssseautiful admin panel.</p>
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
<div class="card">
    <div class="card-bady">
        <p class="h5">
            Nombre
        </p>
        <p class="form-control">
            {{$user->name}}
        </p>
        <h2 class="h5">
            Listado de Roles
        </h2>
        {!! Form::model($user, ['route'=>['admin.users.update',$user],'method'=>'put']) !!}
        @foreach ($roles as $role)
        <div class="m-3">
            <label>
                {!! Form::checkbox('roles[]', $role->id, null, ['class'=>'mr-1']) !!}
                {{$role->name}}
            </label>
        </div>
        @endforeach
        {!! Form::submit('Asignar rol', ['class'=>'btn btn-primary mt-2 m-2']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop