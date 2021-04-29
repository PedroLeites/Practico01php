<?php
class Cuenta
{

    /*atributos*/
    private $titular;
    private $cantidad;

    /*constructores*/
    public function __construct1($titular)
    {

        $this->titular = $titular;

    }

    public function __construct($titular, $cantidad)
    {

        $this->titular = $titular;
        $this->cantidad = $cantidad;

    }

    /*getters y setters*/
    public function getTitular()
    {
        return $this->titular;
    }

    public function setTitular($titular)
    {
        $this->titular = $titular;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    /*toString*/
    public function __toString()
    {
        return " Titular : " . $this->titular
        . " Cantidad : " . $this->cantidad;
    }

    /*metodos especiales*/
    public function ingresar($cantidad)
    {
        if ($cantidad > 0) {
            $this->cantidad = $this->cantidad + $cantidad;
        }
    }

    public function retirar($cantidad)
    {
        if ($this->cantidad - $cantidad < 0) {
            $this->cantidad = 0;
        } else {
            $this->cantidad = $this->cantidad - $cantidad;
        }
    }

}
