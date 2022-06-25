<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoria.']) !!}
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
    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Ingrese una descripcion de la categoria', 'rows'=>'4']) !!}
    @error('description')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="row mb-3">
    <div class="col-sm-12 col-md-6">
        <div class="img-wrapper">

                @isset($category->photo) 
                    @if($category->photo->url == 'placeholder')
                        <img id="picture" class="img-fluid" src="https://images.pexels.com/photos/669582/pexels-photo-669582.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                        <div class="bg-dark text-center p-2"> 
                            Sin imagen
                        </div>
                    @else
                    <img id="picture" src="{{Storage::url($category->photo->url)}}" class="img-fluid" alt="Imagen previa">
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
            <div><span class="text-danger">Importante! </span>Las imagenes deben estar libre de licencia de copyright</div>
        </div>
    </div>
</div>
