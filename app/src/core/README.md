Núcleo principal del app
=========
Hay tres archivos importantes:
- *incluir.php* contiene la clase llamada *Incluir*, que se encarga de hacer la llamada a cualquier clase de PHP, archivo de Javascript, texto META para HTML y CSS en cualquier vista o archivo.
- *menu.php*, *link.php* y *item.php* se encargan de generar la barra superior utilizando objetos. Para incluirlas se puede usar la palabra clave 'menu' desde la clase de *Incluir*.
- *general.js* contiene las funciones y variables globales de Javascript para utilizar desde cualquier vista. Un punto muy importante: contiene la variable *nivel_entrada* que indica la ruta desde la que se está llamando el archivo.