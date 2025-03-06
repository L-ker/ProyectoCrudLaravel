Proyecto de laravel creado, .env quitado del gitignore

Añadido docker, migraciones hechas, todo updateado y instalado, listo para comenzar
Cambiada la / a una pagina llamada home

Añadido controlador usuarios, cambiadas rutas y creado un boceto del home

Loguearse lleva al Home en vez de al dashboard
Registrarse tambien lleva al home

Creado el modelo y el controlador de los usuarios, el controlador fue creado con --resource para que tenga ya metodos para el crud

Migracion de usuarios creada, tengo de idea para los usuarios que la contraseña se guarde y muestre siempre encriptada pero que exista una contraseña especial para administradores para poder ver las contraseñas desencriptadas

Cambiada la fuente y cambiado bastante el home, que se muestre bien el usuario, que no sobre un logout y un carrousel chulo con imagenes del juego de mesa 

Cambios en el nav, migracion y puntuaciones creadas

Ya se muestra en el usuarios.index los usuarios pero hay que cambiar casi todo el usuarios index y hacer el resto que todavia faltan, tambien esta hecho el factory y el seeder de usuarios faltaria de puntuaciones

He estado editando el index, añadidas las sweet alerts para ya que he añadido la funcionalidad de borrar usuarios en su index y si hay mas son cambios minimos

TODO:
Acabar metodos del controlador de usuarios (de este revisar lo que esta hecho tambien) y puntuaciones y sus respectivas paginas
migracion, seeder y factory de puntuaciones
mejorar el home (header, cambiar el nav cuando esten las paginas de usuarios y que solo salga si estas registrado, footer) y usuarios.index