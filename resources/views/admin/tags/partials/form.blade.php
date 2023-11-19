<div class="from-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre de la etiqueta
    ...'])
    !!}
    @error('name')
    <small>{{$message}}</small>
    @enderror
</div>
<div class="from-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'Ingrese el Slug de la etiqueta
    ...','readonly'])
    !!}

    @error('slug')
    <small>{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    <label for="color">Color</label>
    {{-- <select name="color" id="" class="form-control">
        <option value="red">Color Rojo </option>
        <option value="green">Color verde</option>
        <option value="blue">Color azul </option>
    </select> --}}
    {!! Form::label('color', 'Color;') !!}
    {!! Form::select('color', $colors, null, ['class'=>'form-control']) !!}
    @error('color')
    <small>{{$message}}</small>
    @enderror
</div>
