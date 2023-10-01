<?php

/*

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    echo "Teste 1\n",*/


    $in_bd = include_once 'source.php' ;
    $in_user = include_once 'noticia.php';



    echo "Teste 2\n";
    $banco = new BancoDados();
    $conexao = $banco->getConexao();
    echo "Teste 3\n";
    $noticia = new Noticia($conexao);

    $dadosArray = file_get_contents('php://input');
    parse_str($dadosArray, $dados);

    echo "Teste 4\n";
    if(isset($id['id']) && isset($dados['titulo'])  && isset($dados['foto']) && isset($dados['data']) && isset($membro_matricula['$membro_matricula']) && isset($dados['descricao']) {
         echo "Teste 5\n";    
    $noticia->id = $id['id'];     
    $noticia->titulo = $dados['titulo'];
    $noticia->foto = $dados['foto'];
    $noticia->descricao = $dados['descricao'];
    $noticia->data = $dados['data'];
    $noticia->fk_membro_matricula = $dados['post'];

    if($noticia->novoNoticia()){
        /*$codigo = 200;
        echo json_encode(
            array("codigo"=> $codigo)
        );*/
        include_once('../frontend/noticia.php');
    }
    else{
       
       /*
       $codigo= 404;
       echo json_encode(
           array("codigo"=>$codigo)
       );*/
    }

  }
    else {
        $codigo = 400;
        echo json_encode(
            array("codigo"=>$codigo)
        );

    }
    
?>