<div class="card m-2">
    <div class="card-body">
        <h3 class="text-brown pt-2">Más categorías</h3>
        @php
        $categorias = \App\Http\Controllers\CategoryController::getCategories();
        @endphp
        <hr class="text-secondary">
        <div class="d-flex flex-wrap justify-content-around">
            @foreach ($categorias as $categoria)
            <div class="card mb-2 shadow item__container" style="width: 18rem;">
                <img class="card-img-top item__img" src="{{Storage::url($categoria->photo->url)}}"
                    alt="Card image cap">
                <div class="card-overlay item__overlay">
                    <h5 class="card-title text-light text-center">{{$categoria->name}}</h5>
                    <div class="d-flex justify-content-center"><a href="{{route('categories.show',$categoria)}}" class="btn btn-outline-light btn-sm"><i
                                class="fas fa-eye"></i> Ver más.</a></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<style>
    .item__container{
    position: relative;

}
.item__img {
    display: block;
    width: 100%;
}
.item__overlay {
    position: absolute;
    top:0px;
    left:0;
    height: 100%;
    width: 100%;
    background:rgba(0,0,0,0.6);
    color: whitesmoke;
    display:flex;
    flex-direction: column;
    align-items:center;
    justify-content: center; 
    transition: 0.5s;
    
}

</style>