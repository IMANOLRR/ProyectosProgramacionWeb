<?php

function __guardarDatos($codigo, $datos) {
    if (!is_dir('datos')) {
        mkdir('datos');
    }
    if (is_object($datos) || is_array($datos)) {
        file_put_contents("datos/{$codigo}.dat", serialize($datos));
    } else {
        throw new Exception("Los datos no son serializables.");
    }
}


function __cargarDatos($codigo) {
    $archivo = "datos/{$codigo}.dat";
    if (file_exists($archivo)) {
        $contenido = file_get_contents($archivo);
        $datos = @unserialize($contenido);
        if ($datos !== false) {
            return $datos;
        } else {
            throw new Exception("Error al deserializar los datos del archivo {$archivo}.");
        }
    }
    return false;
}


function __listarRegistros() {
    $registros = [];
    if (is_dir('datos')) {
        $archivos = array_diff(scandir('datos'), ['.', '..']);
        foreach ($archivos as $archivo) {
            if (substr($archivo, -4) === '.dat') { 
                $codigo = str_replace('.dat', '', $archivo);
                $datos = __cargarDatos($codigo);
                if ($datos && is_array($datos)) {
                    $registros[] = new personajes(
                        $datos['id'],
                        $datos['nombre'],
                        $datos['color'],
                        $datos['tipo'],
                        $datos['nivel'],
                        $datos['foto'],
                    );
                }
            }
        }
    }
    return $registros;
}