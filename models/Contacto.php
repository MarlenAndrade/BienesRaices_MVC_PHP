<?php

namespace Model;

class Contacto extends ActiveRecord{
    protected static $tabla = 'contacto';
    protected static $columnasDB = ['nombre', 'mensaje', 'tipo', 'precio', 'contacto'];

    public $nombre;
    public $mensaje;
    public $tipo;
    public $precio;
    public $contacto;

    public function __construct($args = []){
        $this->nombre = $args['nombre'] ?? '';
        $this->mensaje = $args['mensaje'] ?? '';
        $this->tipo = $args['tipo'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->contacto = $args['contacto'] ?? '';
    }

    public function validar(){
        if(!$this->nombre){
            self::$errores[] = "Debes añadir un nombre";
        }
        if(!$this->mensaje){
            self::$errores[] = "Debes añadir un mensaje";
        }
        if(!$this->tipo){
            self::$errores[] = "Debes seleccionar una opción de venta o compra";
        }
        if(!$this->precio){
            self::$errores[] = "Debes añadir un presupuesto";
        }
        if(!$this->contacto){
            self::$errores[] = "Debes seleccionar una opción de contacto";
        }
        return self::$errores;
    }
}