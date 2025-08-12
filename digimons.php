<?php

abstract class Digimon{
    public  $nome, $forca,$defesa,$esquiva,$velocidade,$descricao,$img;
   
    public $digievo,$imgdigievo, $involucao, $imginvolucao;

    public $treinador, $imgTreinador;


    public function ataquebasico(){echo('Ataque comun: 20');}
    public function defender(){echo('Defender (defesa)');}
    public function digievoluir(){echo('DIGIEVOLUCAO');}

    public function __set($attr, $valor){
        $this->$attr = $valor;
    }

    public function __get($atributo){
        return $this -> $atributo;
    }
}


class Agumon extends Digimon {
    public $nome = 'Agumon';
    public $forca = 95;
    public $defesa = 65;
    public $esquiva = 70;
    public $velocidade = 90;
    public $descricao = 'Um pequeno dinossauro corajoso que cospe fogo.';
    public $img = 'digimon/estagio_II/Agumon.webp';

    public $involucao = 'Koromon';
    public $imginvolucao = 'digimon/estagio_I/Koromon.webp';

    public $digievo = 'Greymon'; 
    public $imgdigievo = 'digimon/estagio_III/Greymon.webp'; 

    public $treinador = 'Tai';
    public $imgTreinador = '';

    public function chamaNenem() {
        echo('Chama Nenem: 50');
    }
}

class Gabumon extends Digimon {
    public $nome = 'Gabumon';
    public $forca = 85;
    public $defesa = 70;
    public $esquiva = 65;
    public $velocidade = 85;
    public $descricao = 'Um lobo tímido com uma pele protetora que solta fogo azul.';
    public $img = 'digimon/estagio_II/Gabumon.webp';

    public $involucao = 'Tsunomon';
    public $imginvolucao = 'digimon/estagio_I/Tunomon.webp';

    public $digievo = 'Garurumon';
    public $imgdigievo = 'digimon/estagio_III/Garurumon.webp';

    public $treinador = 'Matt';
    public $imgTreinador = '';

    public function fogoAzul() {
        echo('Fogo Azul: 60');
    }
}

class Gomamon extends Digimon {
    public $nome = 'Gomamon';
    public $forca = 75;
    public $defesa = 60;
    public $esquiva = 80;
    public $velocidade = 90;
    public $descricao = 'Um digimon marinho brincalhão com poderes aquáticos.';
    public $img = 'digimon/estagio_II/Gomamon.webp';

    public $involucao = 'Bukamon';
    public $imginvolucao = 'digimon/estagio_I/Pukamon.webp';

    public $digievo = 'Ikkakumon';
    public $imgdigievo = 'digimon/estagio_III/Ikkakumon.webp';

    public $treinador = 'Joe';
    public $imgTreinador = '';

    public function ataqueBolhas() {
        echo('Ataque de Bolhas: 40');
    }
}

class Palmon extends Digimon {
    public $nome = 'Palmon';
    public $forca = 70;
    public $defesa = 65;
    public $esquiva = 75;
    public $velocidade = 80;
    public $descricao = 'Uma planta amigável com vinhas que pode paralisar o inimigo.';
    public $img = 'digimon/estagio_II/Palmon.webp';

    public $involucao = 'Tanemon';
    public $imginvolucao = 'digimon/estagio_I/Pyocomon.webp';

    public $digievo = 'Togemon';
    public $imgdigievo = 'digimon/estagio_III/Togemon.webp';

    public $treinador = 'Mimi';
    public $imgTreinador = '';

    public function cheiroParalisante() {
        echo('Cheiro Paralisante: Paralisa por 1 turno');
    }
}

class Patamon extends Digimon {
    public $nome = 'Patamon';
    public $forca = 60;
    public $defesa = 55;
    public $esquiva = 85;
    public $velocidade = 95;
    public $descricao = 'Um pequeno digimon voador com um coração puro.';
    public $img = 'digimon/estagio_II/Patamon.webp';

    public $involucao = 'Tokomon';
    public $imginvolucao = 'digimon/estagio_I/Tokomon.webp';

    public $digievo = 'Angemon';
    public $imgdigievo = 'digimon/estagio_III/Angemon.webp';

    public $treinador = 'T.K.';
    public $imgTreinador = '';

    public function ondaCelestial() {
        echo('Onda Celestial: 70');
    }
}

class Piyomon extends Digimon {
    public $nome = 'Piyomon';
    public $forca = 75;
    public $defesa = 60;
    public $esquiva = 70;
    public $velocidade = 85;
    public $descricao = 'Um pássaro rosa corajoso que solta chamas em espiral.';
    public $img = 'digimon/estagio_II/Piyomon.webp';

    public $involucao = 'Yokomon';
    public $imginvolucao = 'digimon/estagio_I/Pyocomon.webp';

    public $digievo = 'Birdramon';
    public $imgdigievo = 'digimon/estagio_III/Birdramon.webp';

    public $treinador = 'Sora';
    public $imgTreinador = '';

    public function espiralMagico() {
        echo('Espiral Mágico: 55');
    }
}

class Tentomon extends Digimon {
    public $nome = 'Tentomon';
    public $forca = 80;
    public $defesa = 70;
    public $esquiva = 60;
    public $velocidade = 75;
    public $descricao = 'Um besouro elétrico muito inteligente e leal.';
    public $img = 'digimon/estagio_II/Tentomon.webp';

    public $involucao = 'Motimon';
    public $imginvolucao = 'digimon/estagio_I/Mochimon.webp';

    public $digievo = 'Kabuterimon';
    public $imgdigievo = 'digimon/estagio_III/Kabuterimon.webp';

    public $treinador = 'Izzy';
    public $imgTreinador = '';

    public function choqueEletrico() {
        echo('Choque Elétrico: 65');
    }
}