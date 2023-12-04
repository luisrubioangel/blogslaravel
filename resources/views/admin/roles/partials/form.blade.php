<div class="from-group">
    {!! Form::label('name', 'Nombre', []) !!}
    {!! Form::text('name', null, ['class'=>'form-control','placeholde'=>'ingrese el nobre del rol']) !!}
    @error('name')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<h2 class="h3">Lista de perimisos</h2>
@foreach ($permissions as $permission)
<div>
    {!! Form::checkbox('permissions[]', $permission->id, null, ['class'=>'mr-1']) !!}
    {{$permission->description}}
</div>
@endforeach