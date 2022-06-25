<x-app-layout>
    <div class="row" style="background-image: url('{{URL::asset('assets/images/hero-background.jpg')}}')">
        @include('home.carousel')
        @include('home.mas-vendido')
        @include('home.caracteristicas')
        @include('home.video')    
    </div>
</x-app-layout>