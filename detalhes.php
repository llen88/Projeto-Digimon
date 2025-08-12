<?php
require 'digimons.php';

$selecao = $_GET['digimon'];

$digimon = new $selecao();



?>

<html>
    <head>

    <style>
        body{
            height: 100vh;            
            display: flex;              
            justify-content: center;    
            align-items: center;        
            
            background-image: url('fundo.webp'); 
            background-size: cover;        
            background-repeat: no-repeat;   
        
            background-color: rgb(0, 0, 0);
        }
        .formulario{
         display:flex;
            background-color: rgba(24, 28, 48, 0.788);
            border-radius: 23px;
            max-width: 800px;
            max-height: 1000px;
            margin:auto;
            padding: 10px;
            justify-content: center; /* centraliza na horizontal */
            align-items: center;     /* centraliza na vertical */
        }
        img{
            width: 300px;
            height: 300px;
            margin:30px;
        }
        #nome{
            margin:0;
            align-self:center;
        }

        
    </style>
      
    </head>

    <body>
    <div class="formulario">
  
<section class="visual">
    <h1 id="nome"> <?php echo "<strong>{$digimon->__get('nome')}</strong>"?></1h>
    <img src="<?php echo  $digimon->__get('img');?>" alt="">
   </section>

    <div>
        <section></section>
    </div>
    <section>
    <h2>Descrição:</h2>
    <p id="nome">Descrição<?php echo "<strong>{$digimon->__get('descricao')}</strong>"?></p>
    <br>
    
    <p id="nome">Força:  <?php echo "<strong>{$digimon->__get('forca')}</strong>"?></p>
    <p id="nome">Defesa <?php echo "<strong>{$digimon->__get('defesa')}</strong>"?></p>
    <p id="nome">Esquiva <?php echo "<strong>{$digimon->__get('esquiva')}</strong>"?></p>
    <p id="nome">$velocidade <?php echo "<strong>{$digimon->__get('velocidade')}</strong>"?></p>

    <h2>
        Golpe especial
    </h2>

  
    </section>


    </div>
    </body>
</html>
<!-- $forca = 95;
    public $defesa = 65;
    public $esquiva = 70;
    public $velocidade = 90;
    public $descricao = 'Um pequeno dinossauro corajoso que cospe fogo.'; -->
