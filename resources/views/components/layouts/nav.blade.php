@guest
    <div class ="md:h-10v bg-Fawn
    flex flex-col md:flex-row space-x-2 px-3 justify-center text-white">
        <span >Inicia sesión para acceder a las tablas de la base de datos</span>
    </div>
@endguest
@auth
<nav class ="md:h-10v bg-Fawn
flex flex-col md:flex-row space-x-2 px-3 justify-center" >
    <a class="btn btn-sm btn-info" href="{{ route('usuarios.index') }}">Mostrar usuarios</a>
    <a class="btn btn-sm btn-primary" href="{{ route('usuarios.create') }}">Crear usuario</a>
    <a class="btn btn-sm btn-primary" href="{{ route('home') }}">Inicio</a>
    <a class="btn btn-sm btn-primary" href="{{ route('puntuaciones.create') }}">Crear puntuacion</a>
    <a class="btn btn-sm btn-info" href="{{ route('puntuaciones.index') }}">Mostrar puntuaciones</a>
</nav>
@endauth