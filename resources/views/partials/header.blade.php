<div class="row align-items-center" style="background-image: url({{URL::asset('assets/images/hero-background.jpg')}})">
    {{-- logo --}}
    <div class="col-sm-12 col-lg-4">
        <a href="/"><img class="img-fluid" src="{{URL::asset('assets/logos/logo_big.png')}}" alt=""></a>
    </div>
    {{-- Cartel --}}
    <div class="col-sm-12 col-lg-8 mt-4 mb-4">
        <div class="sign d-flex w-100 bg-light justify-content-between align-items-start p-1" style="border-radius:20px">
            <div class="d-flex align-items-top m-2">
                <i class="fas fa-home text-cinamon p-1" style="font-size:30px"></i>
                <div class="body-contact">
                    <h3 class="text-brown mt-2">Estamos en </h3>
                    <p class="text-secondary">C/Paradero 14 4100 <br>Cori del Rio (Sevilla)</p>
                </div>
            </div>
            <div class="d-flex align-items-top m-2">
                <i class="fas fa-phone-volume text-cinamon p-1" style="font-size:30px"></i>
                <div class="body-contact">
                    <h3 class="text-brown mt-2">Llámenos </h3>
                    <p class="text-secondary">2604 - 253632<br>2604-365874</p>
                </div>
            </div>
            <div class="d-flex align-items-top m-2">
                <i class="far fa-envelope text-cinamon p-1" style="font-size:30px"></i>
                <div class="body-contact">
                    <h3 class="text-brown mt-2">Escribanos </h3>
                    <p class="text-secondary">consultas@anaroncarpinteros.com</p>
                </div>
            </div>
        </div>
    </div>
    @livewire('navigation-menu')
</div>

<style>
    html {
      scroll-behavior: smooth;
    }
    .text-brown {
        color: brown;
    }

    .text-cinamon {
        color: rgb(213, 172, 121);
    }
    @media only screen and (max-width: 768px) {
        .body-contact {
            display:none;
        }
    }
</style>
