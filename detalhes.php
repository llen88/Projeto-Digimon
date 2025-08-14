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
    .formulario {
    display: flex;
    background-color: rgba(24, 28, 48, 0.788);
    border-radius: 23px;
    max-width: 800px;
    padding: 20px;
    gap: 20px; /* espaço entre imagem e detalhes */
}

.visual {
    text-align: center;
}

.visual img {
    width: 300px;
    height: 300px;
    margin: 20px 0;
}

#nome {
    color: var(--cor0);
}

.detalhes {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    color: var(--cor0);
}

.row {
    display: flex;
    gap: 10px;
    margin-bottom: 15px;
}

.imgevolutiva {
    width: 50px;
    height: 50px;
    border-radius: 5px;
    object-fit: cover;
}

.status {
    margin: 3px 0;
}

h2 {
    margin: 10px 0 5px;
}
</style>

<div class="formulario">

    <section class="visual">
        <h1 id="nome"><?php echo $digimon->__get('nome'); ?></h1>
        <img src="<?php echo $digimon->__get('img'); ?>" alt="">
    </section>

    <section class="detalhes">
        <div class="row">
            <img class="imgevolutiva" src="" alt="">
            <img class="imgevolutiva" src="" alt="">
        </div>

        <h2>Descrição:</h2>
        <p><?php echo $digimon->__get('descricao'); ?></p>

        <p class="status">Força: <strong><?php echo $digimon->__get('forca'); ?></strong></p>
        <p class="status">Defesa: <strong><?php echo $digimon->__get('defesa'); ?></strong></p>
        <p class="status">Esquiva: <strong><?php echo $digimon->__get('esquiva'); ?></strong></p>
        <p class="status">Velocidade: <strong><?php echo $digimon->__get('velocidade'); ?></strong></p>

        <h2>Golpe especial:</h2>
        <p class="status"><?php echo $digimon->golpeEspecial(); ?></p>
    </section>

</div>