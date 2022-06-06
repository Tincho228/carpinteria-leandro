@extends('adminlte::page')

@section('title', 'Index')

@section('content_header')
    <h1>Lista de categorias.</h1>
@stop

@section('content')
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
                            <form action="{{route('admin.categories.destroy',$categoria)}}" method="POST">
                            @csrf    
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$categorias->links()}}
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