<div>
    <div class="bg-light mt-2 mb-2">
            <h3 class="text-brown text-center pt-4">Productos mas vendidos.</h3>
            <hr class="text-secondary">
            <p class="text-secondary text-center">Un producto es el más vendido significa que mucha gente lo está comprando<br> y por lo tanto se percibe como un producto fiable.
            </p>
            <div class="d-flex flex-wrap justify-content-around">
                <div class="card mb-2 shadow" style="width: 18rem;">
                    <div class="image-container">
                    <img class="card-img-top" src="{{URL::asset('assets/images/categoria-botiquin.jpg')}}" alt="Card image cap">
                    <span class="badge badge-danger badge-pill badge-overlay">Nuevo</span>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title text-secondary text-center">Card title</h5>
                      <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="d-flex justify-content-center"><a href="#" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i> Ver más.</a></div>
                    </div>
                </div>
                <div class="card mb-2 shadow" style="width: 18rem;">
                    <img class="card-img-top" src="{{URL::asset('assets/images/categoria-cocina.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-secondary text-center">Card title</h5>
                      <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="d-flex justify-content-center"><a href="#" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i> Ver más.</a></div>
                    </div>
                </div>
                <div class="card mb-2 shadow" style="width: 18rem;">
                    <img class="card-img-top" src="{{URL::asset('assets/images/categoria-ventana.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-secondary text-center">Card title</h5>
                      <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="d-flex justify-content-center"><a href="#" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i> Ver más.</a></div>
                    </div>
                </div>
                <div class="card mb-2 shadow" style="width: 18rem;">
                    <img class="card-img-top" src="{{URL::asset('assets/images/categoria-puerta.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-secondary text-center">Card title</h5>
                      <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="d-flex justify-content-center"><a href="#" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i> Ver más.</a></div>
                    </div>
                </div>
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