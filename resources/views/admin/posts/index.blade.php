@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<a class="float-right btn btn-secondary btn-sm" href="{{route('admin.posts.create')}}">Nuevo post</a>
<h1>Listado de post</h1>
@stop

@section('content')
<p>Welcome to this beautiful admin panel.</p>
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
@livewireScripts
@livewire('admin.posts-index')
@stop