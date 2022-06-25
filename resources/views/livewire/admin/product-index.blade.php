<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i
                            class="text-secondary fas fa-search mr-2"></i></span>
                </div>
                <input type="text" wire:model="search" class="form-control" placeholder="Ingresar nombre de producto"
                    aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="col input-group mb-3 w-50">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Categoria</label>
                </div>
                <select wire:model="categorySearch" class="custom-select" id="inputGroupSelect01">
                    <option selected value="">Todas</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col input-group mb-3 w-50">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Promocion</label>
                </div>
                <select wire:model="statusSearch" class="custom-select" id="inputGroupSelect01">
                    <option selected value="">Todos</option>
                    <option value="0">Sin etiqueta</option>
                    <option value="1">Mas Vendido</option>
                </select>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <a class="btn btn-primary btn-sm" href="{{route('admin.products.create')}}">Crear producto</a>
        </div>
    </div>
    @if($products->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Categoria</th>
                    <th>Captura</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->category->name}}</td>
                    <td><img src="{{Storage::url($product->photo->url)}}" alt="" class="img-gif"></td>

                    <td>
                        <a class="btn btn-secondary btn-sm" href="{{route('admin.products.edit', $product)}}">Editar</a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                            data-target="#deleteProduct{{$product->id}}">Eliminar</button>
                    </td>
                </tr>
                @include('admin.products.partials.modal-delete')
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$products->links()}}
    </div>
    @else
    <div class="card-body">
        <div class="alert alert-secondary">No hay categorias</div>
    </div>
    @endif
</div>
