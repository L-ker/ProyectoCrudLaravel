<!-- HEADER DE MOVIL -->
<header class="md:hidden bg-indigoDye flex flex-col justify-center items-center py-2 space-y-1">
<a href="{{ route("home") }}"> 
<img class="h-3/5">
 header para moviles
 </img>
</a>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 </header>
 
 <!-- HEADER DE DESKTOP -->
 <header class="hidden md:flex h-15v bg-indigoDye flex flex-row justify-between px-3 py-1 items-center">
 <img class="w-28 md:w-36 lg:w-44 max-h-[90%] h-auto" src="{{ asset('images/logo.png') }}" alt="logo">
    <h1 class = "hidden md:block text-white text-5xl" >GESTION USUARIOS</h1>
    <div>
        @auth
            <span class="text-white">Usuario: {{ auth()->user()->name }}
            </span>
            <form action="{{route("logout")}}" method="POST">
                @csrf
                <input class="btn  btn-glass" type="submit" value="Logout">
            </form>
        @endauth
        @guest
                <a class="btn  btn-glass" href="{{route("login")}}">Login</a>
                <a class="btn  btn-glass" href="{{route("register")}}">Register</a>
        @endguest

    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 </header>