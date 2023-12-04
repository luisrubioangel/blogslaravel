@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<a class="float-right btn btn-secondary btn-sm" href="{{route('admin.roles.create')}}">Nuevo Rol</a>
<h1>Lista de Roles</h1>
@stop

@section('content')
<p>Welcome to this bsssssseautiful admin panel.</p>
<div class="card">
    <div class="card-boody">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Role</th>
                    <th colspan="2">s</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td width="10px">
                        <a href="{{route('admin.roles.edit',$role)}}" class="btn btn-sm btn-primary">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.roles.destroy',$role)}}">
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop