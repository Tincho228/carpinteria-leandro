<x-app-layout>
    <div class="row" style="background-image: url('{{URL::asset('assets/images/hero-background.jpg')}}')">
        {{-- Productos por categoria --}}
        <div>
            <div class="bg-light mt-2 mb-2">
                <h3 class="text-brown text-center pt-4">Producto Seleccionado: {{$product->name}}</h3>
                <hr class="text-secondary">
                <div class="card m-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 mb-2">
                                <div class="d-flex">
                                    <div style="width:15%">
                                        @foreach ($galleries as $gallery)
                                        <div style="padding:0px 5px 5px 5px; cursor: pointer;">
                                            <img onclick="cambiarImagen(this)" class="img-fluid" src="{{Storage::url($gallery->url)}}" alt="">
                                        </div>
                                        @endforeach
                                    </div>
                                    <div style="width:85%">
                                        <img  id="picture" class="img-fluid" src="{{Storage::url($product->photo->url)}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mb-2">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="text-secondary">Articulo:#{{$product->id}} - {{$product->name}}</h4>
                                        <hr>
                                        <ul>
                                            <li><p>{{$product->description}}</p></li>
                                            <li><p><strong>Stock:</strong> Si</p></li>
                                            <li><p><strong>Aceptamos todos los medios de pago:</strong></p></li>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <img class="mr-2" src="{{URL::asset('assets/iconos/mercadopago.png')}}" alt="">
                                                <div class="mr-2"><i class="fas fa-university text-primary" style="font-size:40px" ></i></div>
                                                <div><i class="fab fa-cc-visa text-secondary mr-2" style="font-size:40px"></i></div>
                                                <div><i class="fab fa-cc-mastercard text-secondary" style="font-size:40px"></i></div>
                                                
                                            </div>
                                        </ul>
                                        
                                        <div class="d-flex justify-content-center mb-2">
                                            <a class="btn btn-warning text-dark btn-block" href="">Contactanos por whatsapp</a>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-info text-dark btn-block" href="">Volver</a>
                                        </div>
                                        

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="card" style="border:1px solid lightgray">
                                    <div class="card-body">
                                    <h4>Preguntas frecuentes</h4>
                                    <hr>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam odit consequuntur reiciendis.</li>
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam odit consequuntur reiciendis.</li>
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam odit consequuntur reiciendis.</li>
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam odit consequuntur reiciendis.</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>

                    </div>
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
            position: relative
        }

        .badge-overlay {
            position: absolute;
            bottom: 5px;
            left: 5px;
        }
    </style>
    <script>
        function cambiarImagen(image){
        var picture = document.getElementById('picture')
        picture.setAttribute('src', image.src)   
    }
    </script>
</x-app-layout>