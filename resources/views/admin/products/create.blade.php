@extends('adminlte::page')

@section('title', 'Crear un producto')

@section('content_header')
    <h1>Crear un producto.</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.products.store','files'=>true]) !!}
            
            @include('admin.products.partials.form')

            {!! Form::submit('Crear producto', ['class' => 'btn btn-sm btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
<script>

    $(document).ready( function() {
         $("#name").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space: '-'
});
});
document.getElementById('file').addEventListener('change', cambiarImagen);
    function cambiarImagen(event){
        var file = event.target.files[0];
        let reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById('picture').setAttribute('src', event.target.result);
        }
        reader.readAsDataURL(file);
    }
</script>
@stop