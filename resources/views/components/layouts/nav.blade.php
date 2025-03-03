@guest
    <span>Inicia sesión para manipular las tablas de la base de datos</span>
@endguest
@auth
<nav class ="md:h-10v bg-Fawn
flex flex-col md:flex-row space-x-2 px-3 justify-center" >
    <a class="btn btn-sm btn-primary" href="{{ route('usuarios.index') }}">Mostrar usuarios</a>
    <a class="btn btn-sm btn-warning" href="{{ route('puntuaciones.index') }}">Mostrar puntuaciones</a>
</nav>
@endauth