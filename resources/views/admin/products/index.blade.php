@extends('adminlte::page')

@section('title', 'Lista de productos por categoria')

@section('content_header')
    <h1>Mostrar lista de productos por categoria.</h1>
@stop

@section('content')
    @if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
    @endif
    @livewire('admin.product-index')
@stop

@section('css')
<style>
    .img-gif{
        width:80px;
    }
</style>
@stop

@section('js')

@stop