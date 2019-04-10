<h1>Trabajo Practico N°2 - Tecnologías del lado del servidor</h1>
<h3>Resueltos</h3>
<ul>
    <li>Ejercicio 1 ✓ </li>
    <li>Ejercicio 2 ✓ </li>
    <li>Ejercicio 3 ✓ </li>
    <li>Ejercicio 4 ✓ </li>
    <li>Ejercicio 5 X </li>
    <li>Ejercicio 6 ✓ </li>
    <li>Ejercicio 7 X </li>
</ul>
<hr>
<h1>Para hacer andar el Framework</h1>   
<p>Abrir una consola de comandos en la carpeta /tp2 y escribir el comando php -S localhost:8000</p>
<hr>
<h2>Estructura</h2>
<p>-controllers<br>
---ej1<br>
------ej1.php<br>
---ej2<br>
------ej2.php<br>
---ej3 <br>
-views<br>
---ej1<br>
------ej1.view.php<br>
---ej2<br>
------ej2.view.php<br>
---ej3<br>
</p>
<br>
<hr>
<h1>Preguntas Teóricas<h1>
    <h2>
    3. Realice las modificaciones necesarias para que el script del punto anterior reciba los datos mediante el método GET. ¿Qué diferencia nota? ¿Cuándo es conveniente usar cada método? Consejo: Utilice las herramientas de desarrollador de su Navegador (Pestaña Red) para observar las diferencias entre las diferentes peticiones.
    </h2>
    <p>La diferencia es que en el metodo GET los parámetros cargados por el usuario viajan en la URL, mientra que con el metodo POST los parámetros cargado por el usuario viajan por el header.</p>
    <h2>
    4. Agregue al formulario un campo que permita adjuntar una imagen, y que la etiqueta del campo sea Diagnóstico. El campo debe validar que sea un tipo de imagen valido (.jpg o .png) y será optativo. La imagen debe almacenarse en un subdirectorio del proyecto y también debe mostrarse al usuario al mostrar el resumen del turno del ejercicio 2. ¿Qué sucede si 2 usuarios cargan imágenes con el mismo nombre de imagen? ¿Qué mecanismo implementar para evitar que un usuario sobrescriba una imagen con el mismo nombre?
    </h2>
    <p>Si dos usuarios cargan un archivo con el mismo nombre el último archivo cargado reemplazará al anterior. El mecanismo implementado por nosotros en el ejercicio fue chequear si existe un archivo cargado con el mismo nombre, si no existe se guarda con su nombre original, si existe uno con el mismo nombre se procede a renombrar el archivo cargado.
    </p>
    <h2>
    5. Utilice las herramientas para desarrollador del navegador y observe cómo fueron codificados por el navegador los datos enviados por el navegador en los dos ejercicios anteriores. ¿Qué diferencia nota?
    </h2>
    <p>
    Metodo GET
        URL solicitada:http://localhost:8000/tp2ej3_results?name=daniel&email=d@guime.com&phone=11223&age=44&shoeSize=20&heigh=174&birthDate=2018-03-08&hair=negro&dateDay=2019-09-06&hour=13:00
        Método solicitado:GET
        Dirección remota:[::1]:8000
        Código de estado:
        200
        Versión:HTTP/1.1
        Política de referencia:no-referrer-when-downgrade
    Metodo POST con imagen
        URL solicitada:http://localhost:8000/tp2ej4
        Método solicitado:POST
        Dirección remota:[::1]:8000
        Código de estado:
        200
        Versión:HTTP/1.1
        Política de referencia:no-referrer-when-downgrade    
    </p>