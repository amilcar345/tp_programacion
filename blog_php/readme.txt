Trabajo Práctico Integrador – Programación en PHP
Alumno: Amilcar Heredia
Profesor: Luis Alberto Siccardi 
Tema: Gestor de Noticias

-----------------------------------------
DESCRIPCIÓN DEL PROYECTO
-----------------------------------------
El proyecto es un blog simple que permite agregar, guardar y mostrar noticias.
Las noticias se almacenan en un archivo JSON (data.json) simulando una base de datos.
Incluye POO, funciones, includes, arrays, validaciones y diseño propio (CSS + JS).

-----------------------------------------
CÓMO EJECUTAR EL PROYECTO
-----------------------------------------
1. Colocar la carpeta del proyecto dentro de "htdocs" de XAMPP.
2. Iniciar Apache desde el panel de XAMPP.
3. Abrir en el navegador:
   http://localhost/mi-proyecto/index.php

-----------------------------------------
ARCHIVOS PHP Y SU FUNCIÓN
-----------------------------------------

1. index.php
   - Archivo principal del sitio.
   - Muestra el formulario para agregar noticias.
   - Procesa los datos enviados por POST.
   - Lee y escribe noticias usando funciones de funciones.php.
   - Muestra todas las noticias guardadas en data.json.
   - Usa includes (header y footer).
   - Usa arrays indexado, asociativo y multidimensional.

2. header.php
   - Cabecera del sitio.
   - Incluye style.css y script.js.
   - Abre el <body> y el contenedor principal.

3. footer.php
   - Pie de página.
   - Cierra las etiquetas abiertas en header.php.

4. Noticia.php
   - Clase POO obligatoria del trabajo.
   - Contiene propiedades: título, autor, contenido, fecha.
   - Tiene constructor, getters y método estático.
   - Se utiliza para demostrar Programación Orientada a Objetos.

5. funciones.php
   Contiene las funciones obligatorias:
   - cargarNoticias() → lee data.json con json_decode()
   - guardarNoticias() → escribe en data.json con json_encode()
   - crearNoticia() → crea una noticia como array asociativo

-----------------------------------------
ARCHIVOS DEL FRONTEND
-----------------------------------------

6. style.css
   - Estilo verde personalizado (proporcionado por el alumno).
   - Da diseño a botones, formularios, tarjetas y noticias.

7. script.js
   - Valida que el formulario no se envíe vacío.
   - Cambia el color del borde de los inputs al enfocar y desenfocar.

-----------------------------------------
SIMULACIÓN DE BASE DE DATOS
-----------------------------------------

8. data.json
   - Archivo donde se guardan todas las noticias.
   - Funciona como una base de datos simulada.

-----------------------------------------


