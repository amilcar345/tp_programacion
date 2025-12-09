<?php

function cargarNoticias() {
    $json = file_get_contents("data/data.json");
    return json_decode($json, true);
}

function guardarNoticias($noticias) {
    $json = json_encode($noticias, JSON_PRETTY_PRINT);
    file_put_contents("data/data.json", $json);
}

function crearNoticia($titulo, $autor, $contenido) {
    return [
        "titulo" => $titulo,
        "autor" => $autor,
        "contenido" => $contenido,
        "fecha" => date("Y-m-d H:i")
    ];
}
