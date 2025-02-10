{{--Header para móvil--}}
<header class="h-20 md:h-24 lg:h-28 bg-flame flex flex-col md:flex-row justify-between px-3 py-1 items-center">
    <img class="w-28 md:w-36 lg:w-44 max-h-[90%] h-auto" src="{{ asset('images/logo.png') }}" alt="logo">
    <h1 class = "hidden md:block text-white text-5xl" >GESTION USUARIOS</h1>
    <div>
        @auth
            <span class="text-white">{{ auth()->user()->name }}
            <form action="{{route("logout")}}" method="POST">
                @csrf
                <input class="btn  btn-glass" type="submit" value="Logout">
            </form>
            Logout

        @endauth
        @guest
                <a class="btn  btn-glass" href="{{route("login")}}">Login</a>
                <a class="btn  btn-glass" href="{{route("register")}}">Register</a>
        @endguest

    </div>
</header>