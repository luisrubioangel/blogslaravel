@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Editar post</h1>
@stop

@section('content')
<p>Welcome to this beautiful admin panel.</p>
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
<div class="card">
    <div class="card-body">
        {!! Form::model($post,['route' => ['admin.posts.update',
        $post],'autocomplete'=>'off','files'=>true,'file','method'=>'put']) !!}
        {{-- {!! Form::hidden('user_id', auth()->user()->id, []) !!} --}}
        @include('admin.posts.partieals.form')

        {!! Form::submit('Actulizar post', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('js')
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
<script>
    $(document).ready( function() {
  $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
});

ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );
        ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
        document.getElementById("file").addEventListener('change',cambiarImagen);
        function cambiarImagen(event){
            var file=event.target.files[0];
            var reader=new FileReader();
            reader.onload=(event)=>{
                document.getElementById("picture").setAttribute('src',event.target.result)
            }
            reader.readAsDataURL(file);
        }
</script>


@endsection
@section('css')
<style>
    .image-wrapper {
        position: relative;
        padding-bottom: 56.25%;

    }

    .image-wrapper img {
        position: absolute;
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
</style>
@stop