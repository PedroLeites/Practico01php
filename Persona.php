<?php
class Persona
{

    /*atributos*/
    private $nombre;
    private $edad;
    private $dni;
    private $sexo;
    private $peso;
    private $altura;

    /*atributos por defecto*/
    public static $sexodef = 'H';

    /*constructor*/
    public function __construct($nombre, $edad, $dni, $sexo, $peso, $altura)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->sexo = $sexo;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    /*getters y setters*/
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /*metodos especiales*/
    public function calcularIMC()
    {
        $imc = $this->peso / ($this->altura ^ 2);
        if ($imc < 20) {
            return -1;
        } else if ($imc > 25) {
            return 1;
        } else {
            return 0;
        }
    }

    public function esMayorDeEdad()
    {
        $esMayor = false;
        if ($this->edad >= 18) {
            $esMayor = true;
        }
        return $esMayor;
    }

    public function comprobarSexo()
    {
        if ($sexo != 'H' && $sexo != 'M') {
            $this->sexo = $sexodef;
        }
    }

    public function generaDNI()
    {
        $DNInum = rand(10000000, 99999999);
        $DNIletra = generaDNILetra($letras);
        $DNI = $DNInum + $DNIletra;
        return $DNI;
    }

    public function generaDNIletra($letra)
    {
        $letras = array('A', 'B', 'C', 'D', 'E', 'F');
        return $letras;
    }

    /*toString*/
    public function __toString()
    {
        return " Nombre: " . $this->nombre
        . " Edad: " . $this->edad
        . " DNI: " . $this->dni
        . " Sexo: " . $this->sexo
        . " Peso: " . $this->peso
        . " Altura: " . $this->altura;
    }

}
