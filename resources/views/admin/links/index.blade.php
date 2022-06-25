@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de links</h1>
@stop

@section('content')
@if(session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
<div class="card">
    <div class="card-header d-flex justify-content-end">
        <a class="btn btn-primary btn-sm" href="{{route('admin.links.create')}}">Crear Link</a>
    </div>
    @if($links->count())
    <div class="card-body">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Url</th>
                    <th>Link</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($links as $link)
                    <tr>
                        <td>{{$link->id}}</td>
                        <td>{{$link->name}}</td>
                        <td>{{$link->url}}</td>
                        <td>
                            @if ($link->info)
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="{{$link->info}}" disabled>
                              </div>    
                            @else
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Sin informacion" disabled>
                              </div>
                            @endif
                        </td>
                        <td width="10px">
                            <a class="btn btn-secondary btn-sm" href="{{route('admin.links.edit', $link)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteCategory{{$link->id}}">Eliminar</button>               
                        </td>
                    </tr>
                    {{-- @include('admin.links.partials.modal-delete') --}}
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="card-body">
        <div class="alert alert-secondary">No hay links</div>
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