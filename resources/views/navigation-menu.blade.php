<div class="container mb-3">
<nav class="navbar navbar-expand-md navbar-dark bg-nav-gray" >
    <div class="container">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav align-items-baseline mt-2">
                <li class="nav-item">
                    <a class="nav-link text-white @if(Request::is('/')) active-warning @endif" href="/">Inicio</a>
                </li>
                <li>
                    <div class="dropdown nav-item">
                        <a class="nav-link dropdown-toggle text-white @if(Request::is('categories*')) active-warning @endif" href="#"
                            role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Categorias
                        </a>
                        @php
                            $categorias = \App\Http\Controllers\CategoryController::getCategories();
                        @endphp
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            @foreach ($categorias as $categoria)
                                <a class="dropdown-item" href="{{route('categories.show', $categoria)}}">{{$categoria->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link text-white @if(Request::is('contacto')) active-warning @endif" data-bs-toggle="modal" data-bs-target="#modal-contact" style="cursor:pointer">Contactanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white @if(Request::is('contacto')) active-warning @endif" href="">Preguntas frecuentes</a>
                </li>
                @guest
                <li class="nav-item">
                    <a href="{{ route('login') }}"  class="nav-link">Iniciar Sesion</a>
                </li>    
                @endguest
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <x-jet-dropdown id="teamManagementDropdown">
                        <x-slot name="trigger">
                            {{ Auth::user()->currentTeam->name }}

                            <svg class="ms-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Team Management -->
                            <h6 class="dropdown-header">
                                {{ __('Manage Team') }}
                            </h6>

                            <!-- Team Settings -->
                            <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                {{ __('Team Settings') }}
                            </x-jet-dropdown-link>

                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                    {{ __('Create New Team') }}
                                </x-jet-dropdown-link>
                            @endcan

                            <hr class="dropdown-divider">

                            <!-- Team Switcher -->
                            <h6 class="dropdown-header">
                                {{ __('Switch Teams') }}
                            </h6>

                            @foreach (Auth::user()->allTeams() as $team)
                                <x-jet-switchable-team :team="$team" />
                            @endforeach
                        </x-slot>
                    </x-jet-dropdown>
                @endif

                <!-- Settings Dropdown -->
                @auth
                    <x-jet-dropdown id="settingsDropdown">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <img class="rounded-circle" width="32" height="32" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            @else
                                {{ Auth::user()->name }}

                                <svg class="ms-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <h6 class="dropdown-header small text-muted">
                                {{ __('Manage Account') }}
                            </h6>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>
            
            
                            <x-jet-dropdown-link href="{{ route('admin.index') }}" :active="request()->routeIs('admin.index')">
                                {{ __('Dashboard') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <hr class="dropdown-divider">

                            <!-- Authentication -->
                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{ __('Cerrar Sesion') }}
                            </x-jet-dropdown-link>
                            <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                @csrf
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                @endauth
            </ul>
        </div>
    </div>
</nav>
</div>

@include('partials.modal-contact')
<style>
    .bg-nav-gray {
        background-color: rgba(127,127,127,0.4) !important;
    }
    .active-warning{
        /*background-color:red;*/
        border-bottom:4px solid orange;
        padding-bottom:0;
    }
</style>