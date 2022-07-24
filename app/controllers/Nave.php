<?php
abstract class Nave{
    private $nombre;
    private $seleccion_1;
    private $proposito;
    private $peso;
    private $desarrolla;
    private $estado;

    function __construct($nombre, $seleccion_1, $proposito, $peso, $desarrolla, $estado){
        $this->nombre = $nombre;
        $this->seleccion_1 = $seleccion_1;
        $this->proposito = $proposito;
        $this->peso = $peso;
        $this->desarrolla = $desarrolla;
        $this->estado = $estado;

    }

    // abstract public function getDatosNave();
}