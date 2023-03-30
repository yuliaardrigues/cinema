<?php
class Cinema{
  protected $cliente;

   public function getCliente(){
    return $this->cliente;
  }
   public function setCliente($cliente){
    $this->cliente = $cliente;
  }
  public function ingresso(){
    echo "O $this->cliente \n";
  }
}
