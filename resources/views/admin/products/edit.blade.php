@extends('adminlte::page')

@section('title', 'Editar un producto')

@section('content_header')
    <h1>Editar un producto.</h1>
@stop

@section('content')
@if(session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
<div class="card">
    <div class="card-body">
        {!! Form::model($product, ['route' => ['admin.products.update', $product],'method'=>'put']) !!}
            
            @include('admin.products.partials.form')

            {!! Form::submit('Actualizar producto', ['class' => 'btn btn-sm btn-primary']) !!}
        {!! Form::close() !!}
            
    </div>
    
</div>
@livewire('admin.image-index',['product' => $product]);
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
</script>
@stop