@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Crear Nuevo Rol</h1>
@stop

@section('content')
<p>Welcome to this bsssssseautiful admin panel.</p>

<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=>'admin.roles.store']) !!}
        @include('admin.roles.partials.form')

        {!! Form::submit('Crear Rol', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop