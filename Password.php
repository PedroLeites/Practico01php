<?php
class Password
{

    /*atributos*/
    private $longitud;
    private $contrasena;

    /*atributos por defecto*/
    public static $longdef = 8;

    /*constructores*/
    public function __construct1($longdef)
    {
        $this->longdef = $longdef;
    }

    public function __construct2()
    {
    }

    /*getters y setters*/
    public function getLongitud()
    {
        return $this->longitud;
    }

    public function getContrasena()
    {
        return $this->contrasena;
    }

    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;
        return $this;
    }

    /*metodos especificos*/

}
