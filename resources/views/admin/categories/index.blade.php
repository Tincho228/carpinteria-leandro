@extends('adminlte::page')

@section('title', 'Index')

@section('content_header')
    <h1>Lista de categorias.</h1>
@stop

@section('content')
@if(session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
<div class="card">
    <div class="card-header d-flex justify-content-end">
        <a class="btn btn-primary btn-sm" href="{{route('admin.categories.create')}}">Crear Categoria</a>
    </div>
    @if($categorias->count())
    <div class="card-body">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                        <td>{{$categoria->id}}</td>
                        <td>{{$categoria->name}}</td>
                        <td>{{$categoria->description}}</td>
                        <td>
                            <a class="btn btn-secondary btn-sm" href="{{route('admin.categories.edit', $categoria)}}">Editar</a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteCategory{{$categoria->id}}">Eliminar</button>               
                        </td>
                    </tr>
                    @include('admin.categories.partials.modal-delete')
                @endforeach
            </tbody>
        </table>
    </div>
    
    @else
    <div class="card-body">
        <div class="alert alert-secondary">No hay categorias</div>
    </div>
    @endif
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop