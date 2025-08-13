<?php
require 'digimons.php';

$selecao = $_GET['digimon'];

$digimon = new $selecao();



?>

<html>
    <head>

    <style>

:root{
    --cor0:white;
}
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
        .visual{
        
        }
        img{
            width: 300px;
            height: 300px;
            margin:30px;
    
        }
        #nome{
            text-align: center;  
            color: var(--cor0);
        }
        p{
        color: var(--cor0);
        }
        h2{
            color: var(--cor0);
        }
        .status{
         size:20;
        }
        .imgevolutiva{
        width: 50px;
        height:50px;
        }

        .row{
            display:flex;
            flex-direction: row;
            width: 100%;
            height:55px;
        }
   
        
    </style>
      
    </head>

    <body>
    <div class="formulario">
  

    <section class="visual">
    <h1 id="nome"><?php echo $digimon->__get('nome');?> </h1>
    
    <img src="<?php echo  $digimon->__get('img');?>" alt="">
    </section>


    <section class='detalhes'>

    <div class='row'>
        <section>
            <img  class='imgevolutiva' src="" alt="">
            <p>sei la</p>
        </section>

        <section>
            <img  class='imgevolutiva' src="" alt="">
        </section>
s
    </div>


    <div>
    <h2 >Descrição:</h2>
    <p id="nome">Descrição<?php echo "<strong>{$digimon->__get('descricao')}</strong>"?></p>
    <br>
    
    <p  class='status'>Força:  <?php echo "<strong>{$digimon->__get('forca')}</strong>"?></p>
    <p  class='status'>Defesa <?php echo "<strong>{$digimon->__get('defesa')}</strong>"?></p>
    <p  class='status'>Esquiva <?php echo "<strong>{$digimon->__get('esquiva')}</strong>"?></p>
    <p  class='status'>$velocidade <?php echo "<strong>{$digimon->__get('velocidade')}</strong>"?></p>

    <h2>
        Golpe especial:
    

    </h2>
    <p class='status'> <?php echo $digimon->golpeEspecial();?></p>

    </div>
    </section>


    </div>
    </body>
</html>
<!-- $forca = 95;
    public $defesa = 65;
    public $esquiva = 70;
    public $velocidade = 90;
    public $descricao = 'Um pequeno dinossauro corajoso que cospe fogo.'; -->
