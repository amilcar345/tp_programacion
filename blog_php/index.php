<?php
/*
    Alumno: Amilcar Heredia
    Tema: Blog / Gestor de Noticias
*/

include "includes/header.php";
include "clases/noticia.php";
include "funciones/funciones.php";

// Arrays obligatorios
$arrayIndexado = ["PHP", "HTML", "CSS"];
$arrayAsociativo = ["curso" => "Programación", "division" => "4°"];
$arrayMultidimensional = [
    ["nombre" => "Juan", "nota" => 9],
    ["nombre" => "Ana", "nota" => 10]
];

// Cargar noticias
$noticias = cargarNoticias();

// Procesar POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $titulo = trim($_POST["titulo"]);
    $autor = trim($_POST["autor"]);
    $contenido = trim($_POST["contenido"]);

    if ($titulo && $autor && $contenido) {

        // Crear noticia
        $nueva = crearNoticia($titulo, $autor, $contenido);

        // Guardarla
        $noticias[] = $nueva;
        guardarNoticias($noticias);

        echo "<div class='alert'>✔ Noticia agregada correctamente.</div>";
    } else {
        echo "<div class='alert'>⚠ Debes completar todos los campos.</div>";
    }
}
?>

<div class="card">
    <h2>Nueva Noticia</h2>

    <form id="formNoticia" method="POST">
        <input class="input" type="text" name="titulo" placeholder="Título">
        <input class="input" type="text" name="autor" placeholder="Autor">
        <textarea class="input" name="contenido" placeholder="Contenido"></textarea>
        <button class="btn" type="submit">Guardar</button>
    </form>
</div>

<h2>Noticias Publicadas</h2>

<?php
foreach ($noticias as $n) {
    if (!empty($n)) {
        echo "
            <div class='noticia'>
                <h3>{$n['titulo']}</h3>
                <b>Autor:</b> {$n['autor']}<br>
                <p>{$n['contenido']}</p>
                <small>{$n['fecha']}</small>
            </div>
        ";
    }
}
?>

<?php include "includes/footer.php"; ?>
