@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="card">
    <div class="card-body">
        <p class="text-justify font-weight-bold translate-x-2">Nueva Etiqueta </p>
        <a href="{{route('admin.tags.create')}}" class="btn btn-secondary btn-sm float-right">Nueva etiqueta</a>
    </div>

</div>
<h1>Tags</h1>
@stop

@section('content')
@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag )
                <tr>
                    <td>{{$tag->id}}</td>
                    <td>{{$tag->name}}</td>
                    <td width="10">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit',$tag)}}"> Editar</a>
                    </td>
                    <td width="10">
                        <form action="{{route('admin.tags.destroy',$tag)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" type="submit">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
