<?php

class personajes{
    private $id;
    private $nombre;
    private $color;
    private $tipo;
    private $nivel;
    private $foto;

    public function __construct($nombre, $color, $tipo, $nivel, $foto, $id = null) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->color = $color;
        $this->tipo = $tipo;
        $this->nivel = $nivel;
        $this->foto = $foto;
    }

    public function getId() {
        return $this->id;
    }

    public function getProfesiones() {
        $conexion = new mysqli('localhost', 'root', 'admin', 'serie_db');
        $personajes = [];

        $result = $conexion->query("SELECT * FROM personajes WHERE id = {$this->id}");
        while ($row = $result->fetch_assoc()) {
            $personajes[] = $row;
        }

        return $personajes;
    }
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->color;
    }

    public function getFechaNacimiento() {
        return $this->tipo;
    }

    public function getFoto() {
        return $this->nivel;
    }

    public function getProfesion() {
        return $this->foto;
    }
}
