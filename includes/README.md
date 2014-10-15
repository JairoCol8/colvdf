Librerías de PHP generales del sistema
=========
Estas librerías y clases no tienen que ver con la aplicación directamente.
Aquí se encuentran:
-Las clases para gestionar la conexión a la base de datos (Db.class.php, Conf.class.php y config.php).
-La clase que gestiona la sesión (Sesion.class.php).
-La clase que crea la sesión al inicio y valida que se mantenga activa.
-Las librerías (que usan las clases anteriores) para iniciar y cerrar sesión.
-Es probable que en un futuro el archivo *model/db_model.php* contenga las instrucciones DLL para generar el esquema de la base de datos necesario para ejecutar la aplicación. Por ahora, esta debe ser creada a parte.