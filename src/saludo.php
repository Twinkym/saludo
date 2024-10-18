<?php
namespace Saludo\Saludo;

Class saludo{
private $msn;

public function __construct(){
$this->setSaludo();
}

private function setSaludo(){
$this->msn = "Hola Mundo";
}

public function getSaludo(){
echo $this->msn;
}
}