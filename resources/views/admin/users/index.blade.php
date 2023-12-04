@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Lista de usurios </h1>
@stop

@section('content')
<p>Welcome to this bsssssseautiful admin panel.</p>
@livewire('admin.users-index')
@stop