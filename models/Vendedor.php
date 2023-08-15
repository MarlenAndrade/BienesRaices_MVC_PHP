<?php

namespace Model;

class Vendedor extends ActiveRecord{
    protected static $tabla = 'vendedores';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'telefono', 'email'];

    public $id;
    public $nombre;
    public $apellido;
    public $telefono;
    public $email;

    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->email = $args['email'] ?? '';
    }

    public function validar(){
        if(!$this->nombre){
            self::$errores[] = "Debes añadir nombre(s)";
        }
        if(!$this->apellido){
            self::$errores[] = "Debes añadir appelido(s)";
        }
        if(!$this->telefono){
            self::$errores[] = "Debes añadir un teléfono";
        }
        if(!preg_match("/[0-9]{10}/", $this->telefono) or strlen($this->telefono) > 10) {
            self::$errores[] = "Teléfono No Válido, Debe Contener 10 Dígitos";
        }
        if(!$this->email){
            self::$errores[] = "Debes añadir un e-mail";
        }
        
        return self::$errores;
    }
}