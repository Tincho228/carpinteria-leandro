<div class="row" style="background-image: url('{{URL::asset('assets/images/hero-background.jpg')}}')">
    <div>
        <div class="bg-gray-transparent mt-2 mb-2">

            <div class="row p-2 text-light">
                <div class="col-sm-12 col-md-4 pt-2 pb-2">
                    <h5>Nuestros horarios</h5>
                    <hr>
                    <p>Los muebles a medida son piezas únicas creadas para un interior en concreto.
                    </p>
                    <div class="mt-2">
                        <p>Lunes de 10 a 18hs.</p>
                        <p>Lunes de 10 a 18hs.</p>
                        <p>Lunes de 10 a 18hs.</p>
                        <p>Lunes de 10 a 18hs.</p>
                        <p>Lunes de 10 a 18hs.</p>
                        <p>Lunes de 10 a 18hs.</p>
                    </div>
                    <div>
                        <img src="{{URL::asset('assets/iconos/email.png')}}" alt="Icono de mail">
                        <a class="button-link" href="">consultas@anaroncarpinteros.com</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 pt-2 pb-2">
                    <h5>Envianos un mensaje</h5>
                    <hr>
                    <p>Los muebles a medida son piezas únicas creadas para un interior en concreto.
                    </p>
                    <div class="mt-2">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="text" class="form-control" aria-describedby="emailHelp"
                                    placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
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

                            <button type="submit" class="btn btn-primary btn-sm text-light">Enviar</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 pt-2 pb-2">
                    <h5>Seguinos en redes sociales</h5>
                    <hr>
                    <p>Los muebles a medida son piezas únicas creadas para un interior en concreto.
                    </p>
                    <div class="mt-2 mb-4">
                        <div class="mb-2">
                            <img class="media-icon" src="{{URL::asset('assets/iconos/whatsapp.png')}}"
                                alt="Icono de whatsapp">
                            <a class="button-link" href="https://api.whatsapp.com/send?phone=542974234490" target="_blank">WhatsApp</a>
                        </div>
                        <div class="mb-2">
                            <img class="media-icon" src="{{URL::asset('assets/iconos/instagram.png')}}"
                                alt="Icono de instagram">
                            <a class="button-link" href="">Instagram</a>
                        </div>
                        <div class="mb-2">
                            <img class="media-icon" src="{{URL::asset('assets/iconos/facebook.png')}}"
                                alt="Icono de facebook">
                            <a class="button-link" href="">Facebook</a>
                        </div>
                    </div>
                    <h5>Veni a visitarnos</h5>
                    <hr>
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13136.355567268049!2d-68.3935487!3d-34.60191365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sar!4v1654263992419!5m2!1sen!2sar"
                        width="100%"style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-black d-flex justify-content-center align-items-center p-3">
        <img style="width:40px" class="mr-2" src="{{URL::asset('assets/logos/logo-small.png')}}" alt="Logo small">
        <span class="text-light">
            Anaron Carpinteros | Todos los derechos reservados | 2022
        </span>
    </div>
</div>

<style>
    .bg-gray {
        background-color:rgb(64, 64, 64);
    }
    .bg-gray-transparent {
        background-color: rgba(64, 64, 64, 0.6);
    }

    .button-link {
        text-decoration: none;
        color: whitesmoke;
    }

    .button-link:hover {
        color: orange;
        text-decoration: none;
    }

    .media-icon {
        width: 35px;
        height: 35px;
    }
</style>