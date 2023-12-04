<div class="form-group">
    {!! Form::label('name', 'Nombre:', []) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}
    @error('name')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug', []) !!}
    {!! Form::text('slug', null, [
    'class' => 'form-control',
    'placeholder' => 'ingerse el slug de post',
    'readonly',
    ]) !!}

    @error('slug')
    <small class="text-danger">{{$message}}</small>

    @enderror
</div>
<div class="form-group">
    {!! Form::label('catergory_id', 'Categoria', []) !!}
    {!! Form::select('catergory_id', $categories, null, ['class' => 'form-control']) !!}
    @error('catergory_id')
    <small class="text-danger">{{$message}}</small>

    @enderror

</div>
<div class="form-group">
    <p class="front weight-bold">
        Etiquetas
    </p>
    @foreach ($tags as $tag)
    <label for="" class="mr-2">
        {!! Form::checkbox('tags[]', $tag->id, null, []) !!}
        {{ $tag->name }}
    </label>

    @endforeach
    <hr>
    @error('tags')
    <small class="text-danger">{{$message}}</small>

    @enderror
</div>
{{-- <div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label>
        {!! Form::radio('status', 1, true, []) !!} Borrador
    </label>
    <label>
        {!! Form::radio('status', 2, false, []) !!}Publicado
    </label>
    @error('status')
    <small class="text-danger">{{$message}}</small>

    @enderror
</div> --}}

<div class="form-group">
    <p class="font-weight-bold">Estado</p>

    <label>
        {!! Form::radio('status', 1,true) !!} Borrador
    </label>

    <label>
        {!! Form::radio('status', 2,true) !!} Publicado
    </label>

    @error('status')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="row">
    <div class="col">
        <div class="image-wrapper">
            @isset($post->image)


            <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
            @else
            <img id="picture"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBHLTlLmUPmb4c5Umz2u7gR6kqcuu_O7hlPQ&usqp=CAU"
                alt="">
            @endisset

        </div>

    </div>
    <div class="col">
        <div class="from-group">
            {!! Form::label('file', 'Imagen que se mostrará en el post', []) !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            @error('file')
            <span>{{$message}}</span>xxxxxxxxx
            @enderror

        </div>
        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nisi quis non? Nostrum est,
                consequatur nemo velit omnis, praesentium aut voluptatem soluta saepe blanditiis nam sunt
                quod itaque repudiandae recusandae.</p>
        </div>

    </div>
</div>
<div class="form-group">
    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
    @error('extract')
    <small class="text-danger">{{$message}}</small>

    @enderror
</div>
<div class="form-group">
    {!! Form::label('body', 'cuepo del post', []) !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    @error('body')
    <small class="text-danger">{{$message}}</small>

    @enderror
</div>