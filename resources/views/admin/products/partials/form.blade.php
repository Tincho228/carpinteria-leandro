<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del producto.']) !!}
    @error('name')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Campo interno no editable.',
    'readonly']) !!}
    @error('slug')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Ingrese una descripcion del producto', 'rows'=>'4']) !!}
    @error('description')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="row mb-3">
    <div class="col form-group">
        {!! Form::label('category_id', 'Categoria') !!} 
        {!! Form::select('category_id', $categories ,null, ['class' => 'form-control', 'placeholder' => 'Seleccione una categoria']) !!}
        @error('category_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col form-group">
        {!! Form::label('status', 'Etiqueta') !!}<span class="badge badge-danger badge-pill badge-overlay ml-3">Mas vendido</span>
        {!! Form::select('status', ['0'=>'No','1'=>'Si'],'0', ['class' => 'form-control']) !!}
        
        <span class="ml-3">¿ Agregar el producto a la seccion mas vendidos ?</span>
    </div>    
</div>


{{-- Image management --}}
<div class="row mb-3">
    <div class="col-sm-12 col-md-6">
        <div class="img-wrapper">

                @isset($product->photo) 
                    @if($product->photo->url == 'placeholder')
                        <img id="picture" class="img-fluid" src="https://images.pexels.com/photos/669582/pexels-photo-669582.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                        <div class="bg-dark text-center p-2"> 
                            Sin imagen
                        </div>
                    @else
                    <img id="picture" src="{{Storage::url($product->photo->url)}}" class="img-fluid" alt="Imagen previa">
                    @endif
                @else
                    <img id="picture" class="img-fluid" src="https://images.pexels.com/photos/669582/pexels-photo-669582.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                @endisset
            
        </div>
    </div>
    <div class="col-sm-12 col-md-6 mt-3">
        <div class="form-group">
            {!! Form::label('file','Imagen') !!}
            {!! Form::file('file',['class'=>'form-control-file mb-3','accept'=>'image/*']) !!}
            @error('file')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <div><h2 class="text-danger">Importante! </h2>
                Las imagenes deben estar libre de licencia de copyright</div>
        </div>
    </div>
</div>