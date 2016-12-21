<?php
class jugadorDado
{


private $minNumDado=0;
private $maxNumDado=0;
private $tirardado=0;
private $tiradas=[];
//Getters

public function getminNumDado(){
  return $this->minNumDado;
}

public function getmaxNumDado(){
  return $this->maxNumDado;
}

//Setters

public function setmaxNumDado($maxNumDado){
  if ($maxNumDado>12) {
    $this->maxNumDado=12;
  }else {
    $this->maxNumDado=$maxNumDado;
  }
}

public function setminNumDado($minNumDado){
  if ($minNumDado<0) {
    $this->minNumDado=0;
  }else {
    $this->minNumDado=$minNumDado;
  }
}

public function tirardado()
{
  $tirar=rand($this->minNumDado,$this->maxNumDado);
  $this->guardarTirada($tirar);
  return $tirar;
}

public function guardarTirada($tirar){
  $this->tiradas[]=$tirar;
}


public function imprimirTiradas(){
  var_dump($this->tiradas);
}

public function calcularMediaTiradas(){
$media=array_sum($this->tiradas)/count($this->tiradas);
echo "La media de las tiradas es: ".round($media);
}


}





     ?>
