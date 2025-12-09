<?php

class Noticia {

    private $titulo;
    private $autor;
    private $contenido;
    private $fecha;

    public static $contador = 0;

    public function __construct($titulo, $autor, $contenido, $fecha) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->contenido = $contenido;
        $this->fecha = $fecha;
        self::$contador++;
    }

    public function getTitulo() { return $this->titulo; }
    public function getAutor() { return $this->autor; }
    public function getContenido() { return $this->contenido; }
    public function getFecha() { return $this->fecha; }

    public static function cantidad() {
        return self::$contador;
    }
}