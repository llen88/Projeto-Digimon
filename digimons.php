<?php

abstract class Digimon{

    public $nome,$digilucao,$forca,$vida,$img,$descricao, $energia,$nomeTreinador,$imgTreinador;


    public function ataquebasico(){echo('Ataque comun: 20')}
    public function defender(){echo('Defender (defesa)')}
    public function digievoluir(){echo('DIGIEVOLUCAO')}

    public function __set($attr, $valor){
        $this->$attr = $valor;
    }

    public funciton __get($atributo){
        return this -> $atributo;
    }
}


class Agumon extends Classe{
    public $nome ='Agumon'
    public $digilucao =''
    public $forca = 100; 
    public $defesa = 75; 
    public $esquiva = 75;
    public $velocidade = 75;
    public $energia = 75;
}
class Gabumon extends Classe{

    public $forca = 100; 
    public $defesa = 75; 
    public $esquiva = 75;
    public $velocidade = 7

}
class Patamon extends Classe{

}
class Palmon extends Classe{

}
class Piyomon extends Classe{

}
class Tentomon extends Classe{

}

?>