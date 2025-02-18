Proyecto de laravel creado, .env quitado del gitignore

Añadido docker, migraciones hechas, todo updateado y instalado, listo para comenzar
Cambiada la / a una pagina llamada home

Añadido controlador usuarios, cambiadas rutas y creado un boceto del home

Loguearse lleva al Home en vez de al dashboard
Registrarse tambien lleva al home

Creado el modelo y el controlador de los usuarios, el controlador fue creado con --resource para que tenga ya metodos para el crud

Migracion de usuarios creada, tengo de idea para los usuarios que la contraseña se guarde y muestre siempre encriptada pero que exista una contraseña especial para administradores para poder ver las contraseñas desencriptadas

TODO:
hacer los metodos y crear las paginas de usuarios
seeder usuarios
mejorar el home (header, cambiar el nav cuando esten las paginas de usuarios y que solo salga si estas registrado, footer)

Planteando una segunda tabla para hacer la relacion, como mi proyecto sera un juego de mesa estoy pensando en añadir algo de una tabla de maxima puntuacion de cada usuario y quizas algo de puntuacion total, ademas podria agregar una tabla con un top de los mejores usuarios