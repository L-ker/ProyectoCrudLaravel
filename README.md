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

Casi acabado el edit-update de usuarios

Visualmente arreglado el edit al menos en gran medida, he añadido la comprobacion de los datos por parte del servidor con el validator que proporciona laravel que tambien debo usar en el store

He cambiado de validar con el Validator a usar las request porque me parece mas correcto y ademas puedes editar los mensajes de manera facil. Tambien he añadido el sweet alert a editar 

Migracion,seeder y factory de puntuaciones hecho. Index,edit, create y delete de puntuaciones hechos

Hecho el show, en el show de usuarios se puede ver sus puntuaciones y en el de puntuaciones se ve los datos del usuario con el que esta relacionado

añadidos idiomas, tengo que poner todas las traducciones y crear forma de cambiar de idioma (quizas en el footer?)

Añadido select al footer para cambiar entre idiomas

Practicamente el 100% de la pagina ha sido traducida solo faltan validaciones, mensajes de session que ademas quiero cambiarlos un poco a ser posible y los sweet alerts antes de borrar y editar

Mas traducciones, arreglado un problema de que en el logout te mandaba al dashboard, cambiado el color de las alertas de daisyui que se mostraban con los mensajes de sesion, cambiado los idiomas porque no tenia sentido que se tradujesen, ahora cada idioma sale en el select como se escribe en su idioma, el header cambia si estas en desktop o en movil y la pagina es relativamente responsive, comentados los mensajes de los request porque los propios idiomas al agregarlos vienen con traducciones de validacion y arreglado algun tema en el front que habia