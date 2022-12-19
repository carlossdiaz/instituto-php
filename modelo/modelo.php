<?php
class Alumno{
    public $dni;
    public $descripcion;
    public $apellido;
    public $direccion;
    public $email;

    function ___construct($dni, $descripcion) {
        $this->dni = $dni;
        $this->descripcion=$descripcion;
    }
    function set_dni($dni){
        $this->dni=$dni;
    }
    function get_dni(){
        return $this->dni;
    }
    function set_descripcion($descripcion){
        $this->descripcion=$descripcion;
    }
    function get_descripcion(){
        return $this->descripcion;
    }
    function set_apellido($apellido){
        $this->apellido=$apellido;
    }
    function get_apellido(){
        return $this->apellido;
    }
    function set_direccion($direccion){
        $this->direccion=$direccion;
    }
    function get_direccion(){
        return $this->direccion;
    }
    function set_email($email){
        $this->email=$email;
    }
    function get_email(){
        return $this->email;
    }
}


class Asignatura{
    public $cod;
    public $descripcion;

    function ___construct($cod, $descripcion) {
        $this->cod = $cod;
        $this->descripcion=$descripcion;
    }
    function set_cod($cod){
        $this->cod=$cod;
    }
    function get_cod(){
        return $this->cod;
    }
    function set_descripcion($descripcion){
        $this->descripcion=$descripcion;
    }
    function get_descripcion(){
        return $this->descripcion;
    }
}
?>