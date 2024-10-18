<?php
namespace Saludo\Saludo;

Class saludo{
private $msn;
private $usuario;

public function __construct($usuario){
    $this->usuario = $usuario;
    $this->setSaludo();
}

private function setSaludo(){
$this->msn = "Bienvenid@ Sr/Sra";
}

public function getSaludo(){
echo $this->msn;
}

}