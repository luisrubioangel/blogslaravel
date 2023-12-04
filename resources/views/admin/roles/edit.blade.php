@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Editar Rols</h1>
@stop

@section('content')
<p>Welcome to this bsssssseautiful admin panel.</p>
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
<div class="card">
    <div class="card-body">
        {!! Form::model($role, ['route'=>['admin.roles.update',$role],'method'=>'put']) !!}
        @include('admin.roles.partials.form')
        {!! Form::submit('Actualizar rol Rol', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>

@stop