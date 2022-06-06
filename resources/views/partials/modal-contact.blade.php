<!-- Modal -->
<div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-gray text-light">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><img style="width:40px" class="mr-2" src="{{URL::asset('assets/logos/logo-small.png')}}" alt="Logo small"> Envianos tu mensaje</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <p>Los muebles a medida son piezas únicas creadas para un interior en concreto.
                    </p>
                    <div class="mt-2">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp"
                                placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp"
                                placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Celular</label>
                            <input type="number" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mensaje</label>
                            <textarea type="text" class="form-control" id="exampleInputPassword1" cols="30"
                                rows="4"></textarea>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm text-light">Enviar</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>