<?php
class pet{    
    public $raca;
    public $porte;
    public $especie;
    private $pelugem;

    public function __construct($raca, $porte,$especie,$pelugem){

      $this->raca = $raca;
      $this->porte = $porte;
      $this->especie = $especie;
      $this->pelugem = $pelugem;
    
      echo("(O ".$this->especie." com a raça ".$this->raca." nasceu e o porte é ".$this->porte.") \n");
    }

    /*public function __destruct(){
      echo("O pet, da raça: ".$this->raca." Morreu! \n");
    }
    */

    public function setPelugem($p){
      $this->pelugem = $p;
      
    }
    public function getPelugem(){
      echo ("A pelugem mudou para ".$this->pelugem." e o ".$this->especie." soltou pelo!");
    }

    public function acariciar(){
        echo("O pet está feliz!");
    }
    public function comer(){
        echo("Comendo \n");

    }
}




?>