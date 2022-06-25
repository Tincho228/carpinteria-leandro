<x-app-layout>
    <div class="row" style="background-image: url('{{URL::asset('assets/images/hero-background.jpg')}}')">
            {{-- Productos por categoria --}}
            <div>
                <div class="bg-light mt-2 mb-2">
                        <h3 class="text-brown text-center pt-4">Categoria: {{$category->name}}</h3>
                        <hr class="text-secondary">
                        <p class="text-secondary text-center">{{$category->description}}</p>
                        <div class="d-flex flex-wrap justify-content-around">
                            @foreach ($products as $product)
                            <div class="card mb-2 shadow" style="width: 18rem;">
                                <div class="image-container">
                                <img class="card-img-top" src="{{Storage::url($product->photo->url)}}" alt="Card image cap">
                                @if ($product->status === '1')
                                    <span class="badge badge-danger badge-pill badge-overlay">Nuevo</span>    
                                @endif
                                
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title text-secondary text-center">{{$product->name}}</h5>
                                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <div class="d-flex justify-content-center"><a href="{{route('products.show',$product)}}" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i> Ver más.</a></div>
                                </div>
                            </div>    
                            @endforeach
                            
                        </div> 
                        {{-- Otras categorias --}}
                        @include('categories-section')
                </div>

            </div>
    </div>
    <style>
        .shadow {
        box-shadow: 5px 10px #888888;
    }
    .image-container {
        position:relative
    }
    .badge-overlay {
        position:absolute;
        bottom:5px;
        left:5px;
    }
    </style>
</x-app-layout>