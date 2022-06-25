<div class="card">
    <div class="card-body">
        <h3 class="mt-3">Administrar Galeria</h3>
        <p>Lista de fotos</p>
        @if ($images->count()>0)
        <div class="row">
            @foreach ($images as $photo)
            <div class="col-sm-6 col-lg-3">
            <div class="item__container">
                <img class="item__img" src="{{Storage::url($photo->url)}}" alt="Photo"
                    id="picture{{$photo->id}}">
                <div class="item__overlay">
                    <p><i class="fas fa-trash-alt text-white icon-delete"  ></i> Borrar imagen?</p>
                    <button type="button" class="btn btn-outline-light" wire:click="deleteConfirmation({{$photo->id}})">Borrar</button>
                </div>
            </div>
        </div>
            @endforeach
        </div>
        @if (session()->has('info'))
            <div class="alert alert-success">{{session('info')}}</div>
        @endif
        <div class="card-footer">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-sm btn-info"
                    data-toggle="modal" data-target="#uploadModal">
                    <i class="fas fa-plus text-white"></i> Agregar foto
                </button>
        </div>
        @else
        <div class="alert alert-secondary">
            No hay fotos en esta galleria.
        </div>
        <div class="card-footer">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm btn-info"
                data-toggle="modal" data-target="#uploadModal">
                <i class="fas fa-plus text-white"></i> Agregar foto
            </button>
        </div>

        @endif
        
    </div>

    <!-- Modal de subir foto -->
    <x-simple-modal>
        <x-slot name="target">
            uploadModal
        </x-slot>
            

        <x-slot name="title">
            Subir foto a la galeria
        </x-slot>

        <x-slot name="content">
            <form wire:submit.prevent="storePhoto">
                <!-- Loading placeholder -->
                <div wire:loading wire:target="image">
                    <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>   
                </div>
                <!-- Image preview -->
                
                @if ($image)
                    <img class="img-fluid mb-4" src="{{$image->temporaryUrl()}}" alt="">
                    
                @endif
                
                <div class="form-group">
                    <label for="image">Elegir una foto</label>
                    <input type="file" class="form-control-file" wire:model="image" >
                </div>
                @error('image')
                    <div class="text-danger mb-4">{{$message}}</div>
                @enderror

                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary btn-sm" data-dismiss="modal" aria-label="Close">Cancelar</button>
                    <button type="submit" class="btn btn-primary btn-sm" wire:loading.attr="disabled">Subir foto</button>
                </div>
            </form>
        </x-slot>

    </x-simple-modal>
    <!-- Modal de eliminar foto -->
    <x-simple-modal>
        <x-slot name="target">
            deleteConfirmationModal
        </x-slot>
        
        <x-slot name="title">
            Eliminar Foto 
        </x-slot>

        <x-slot name="content">
            <p>Esta seguro que desea eliminar la foto?</p>
            <button type="submit" class="btn btn-secondary btn-sm mr-2" wire:click="cancel()" class="close" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-danger btn-sm mr-2" wire:click="deletePhoto()" >Eliminar</button>  
        </x-slot>

    </x-simple-modal>
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    window.addEventListener('closeModal', event => {
        $("#uploadModal").modal('hide');    
        $("#deleteConfirmationModal").modal('hide');             
    })
    window.addEventListener('show-deleteConfirmation', event => {
        $("#deleteConfirmationModal").modal('show');                
    })

    
    
</script>

<style>
.item__container{
    position: relative;
    margin:5px;
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
    opacity: 0;
    transition: 0.5s;
    
}
.item__overlay:hover {
    opacity: 1;
    transition:0.5;
}

/* Loading spinner */

.lds-roller {
    display: inline-block;
    position: relative;
    width: 80px;
    height: 80px;
}

.lds-roller div {
    animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
    transform-origin: 40px 40px;
}

.lds-roller div:after {
    content: " ";
    display: block;
    position: absolute;
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #c1c1c1;
    margin: -4px 0 0 -4px;
}

.lds-roller div:nth-child(1) {
    animation-delay: -0.036s;
}

.lds-roller div:nth-child(1):after {
    top: 63px;
    left: 63px;
}

.lds-roller div:nth-child(2) {
    animation-delay: -0.072s;
}

.lds-roller div:nth-child(2):after {
    top: 68px;
    left: 56px;
}

.lds-roller div:nth-child(3) {
    animation-delay: -0.108s;
}

.lds-roller div:nth-child(3):after {
    top: 71px;
    left: 48px;
}

.lds-roller div:nth-child(4) {
    animation-delay: -0.144s;
}

.lds-roller div:nth-child(4):after {
    top: 72px;
    left: 40px;
}

.lds-roller div:nth-child(5) {
    animation-delay: -0.18s;
}

.lds-roller div:nth-child(5):after {
    top: 71px;
    left: 32px;
}

.lds-roller div:nth-child(6) {
    animation-delay: -0.216s;
}

.lds-roller div:nth-child(6):after {
    top: 68px;
    left: 24px;
}

.lds-roller div:nth-child(7) {
    animation-delay: -0.252s;
}

.lds-roller div:nth-child(7):after {
    top: 63px;
    left: 17px;
}

.lds-roller div:nth-child(8) {
    animation-delay: -0.288s;
}

.lds-roller div:nth-child(8):after {
    top: 56px;
    left: 12px;
}

@keyframes lds-roller {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

</style>
</div>

