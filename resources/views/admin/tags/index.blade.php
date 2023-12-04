@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@can('admin.tags.create')
<div class="card">
    <div class="card-body">
        <p class="text-justify translate-x-2 font-weight-bold">Nueva Etiqueta </p>
        <a href="{{route('admin.tags.create')}}" class="float-right btn btn-secondary btn-sm">Nueva etiqueta</a>
    </div>

</div>
@endcan

<h1>Tags</h1>
@stop

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
                        @can('admin.tags.edit')
                        <a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit',$tag)}}"> Editar</a>
                        @endcan

                    </td>
                    <td width="10">
                        @can('admin.tags.edit')
                        <form action="{{route('admin.tags.destroy',$tag)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" type="submit">
                                Eliminar
                            </button>
                        </form>
                        @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop