<h1>Trabajo Practico N°2 - Tecnologías del lado del servidor</h1>
<hr>
<h1>Para hacer andar el Framework</h1>   
<p>Abrir una consola de comandos en la carpeta /tp2 y escribir el comando php -S localhost:8000, luego en el navegador escribir 'localhost:8000' (sin comillas) para acceder.</p>
<hr>
<h2>Para resolver el Trabajo Práctico se uso una sola instancia del framework MVC visto en clase para resolver todos los ejercicios. Se uso la siguiente estructura en los controladores y vistas para organizar los ejercicios.</h2>
<p>-controllers<br>
---ej1<br>
------ej1.php<br>
---ej2<br>
------ej2.php<br>
---ej3 <br>
-views<br>
---forms<br>
---ej1<br>
------ej1.view.php<br>
---ej2<br>
------ej2.view.php<br>
---ej3<br>
</p>
<h4>Nota 1: para el ejericio 7 no se incluyó carpeta en controllers ni view con el nombre tp2ej7. Todas las vistas del ejercicio 7 están incluidas en la carpeta del ejercicio 6 en el subdirectorio 'views/tp2ej6/dates', también en la carpeta 'controllers/tp2ej6' está el controlador del ejercicio 7 con el nombre show.php.</h4>
<h4>Nota 2: las imágenes del ejercicio 4 estan alojadas en el directorio 'controllers/tp2ej4/uploads', mientras que las del ejercicio 7 estan en el directorio 'controllers/tp2ej6/uploads' </h4>
<h4>Nota 3: en el directorio 'views/forms' estan los formularios que se usaron durante todo el trabajo práctico. El form.html contiene el formulario estándar y el form-attachment.html es el formulario estándar con el agregado del input para la subida del archivo.</h4>
<br>
<hr>
<h1>Preguntas Teóricas<h1>
    <h2>
    3. Realice las modificaciones necesarias para que el script del punto anterior reciba los datos mediante el método GET. ¿Qué diferencia nota? ¿Cuándo es conveniente usar cada método? Consejo: Utilice las herramientas de desarrollador de su Navegador (Pestaña Red) para observar las diferencias entre las diferentes peticiones.
    </h2>
    <p>La diferencia es que en el metodo GET los parámetros cargados por el usuario viajan en la URL y en la petición POST se agregan dos encabezados, Content-Type y Content-Length que determinan el tipo de codificacion y el tamaño de la petición.</p>
    <h2>
    4. Agregue al formulario un campo que permita adjuntar una imagen, y que la etiqueta del campo sea Diagnóstico. El campo debe validar que sea un tipo de imagen valido (.jpg o .png) y será optativo. La imagen debe almacenarse en un subdirectorio del proyecto y también debe mostrarse al usuario al mostrar el resumen del turno del ejercicio 2. ¿Qué sucede si 2 usuarios cargan imágenes con el mismo nombre de imagen? ¿Qué mecanismo implementar para evitar que un usuario sobrescriba una imagen con el mismo nombre?
    </h2>
    <p>Si dos usuarios cargan un archivo con el mismo nombre el último archivo cargado reemplazará al anterior. El mecanismo implementado por nosotros en el ejercicio fue chequear si existe un archivo cargado con el mismo nombre, si no existe se guarda con su nombre original, si existe uno con el mismo nombre se procede a renombrar el archivo cargado.
    </p>
    <h2>
    5. Utilice las herramientas para desarrollador del navegador y observe cómo fueron codificados por el navegador los datos enviados por el navegador en los dos ejercicios anteriores. ¿Qué diferencia nota?
    </h2>
    <p>
    En el metodo GET del ejercicio 3 se utiliza application/xhtml mientras que con el metodo POST en el ejercicio 4 también se utiliza multipart/form-data ya que se hace la carga de un archivo binario.
    </p>
    <h2>6. ¿Cómo relaciona la imagen del turno con los datos del turno? Comente alternativas que evaluó y opción elegida.</h2>
    <p>
    La imagen del turno se relaciona con un turno particular. Es decir que cada entrada del archivo persistente, equivale a un turno pedido y por ende una imágen relacionada.
    Cuando se guarda la línea con los datos del turno, uno de los campos es el path a la imagen generando la relacion Turno - Imágen de diagnóstico.
    Se pensó la alternativa de renombrar la imágen de diagnostico como id_turno - fecha_de_turno pero no se llevó a cabo.
    </p>
