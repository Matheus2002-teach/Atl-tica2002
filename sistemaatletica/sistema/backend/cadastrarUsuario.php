<?php
/*
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	echo "Teste 1\n";*/

    $in_bd = include_once 'banco.php';
	$in_user = include_once 'usuario.php';	
	
	echo "Teste 2\n";
	$banco = new BancoDados();
	$conexao = $banco->getConexao();
	echo "Teste 3\n";
	$usuario = new Usuario($conexao);
	
	$dadosArray = file_get_contents('php://input');
	parse_str($dadosArray, $dados);

	echo "Teste 4\n";
	if(isset($dados['nome']) && isset($dados['matricula']) && isset($dados['curso']) && isset($dados['email']) && isset($dados['senha']) && isset($dados['repeteSenha'])){
		echo "Teste 5\n";
		$usuario->nome = $dados['nome'];
		$usuario->email = $dados['email'];
		$usuario->senha = $dados['senha'];
		$usuario->matricula = $dados['matricula'];
		$usuario->fk_Curso_id = $dados['curso']; 


		if($usuario->novoUsuario()){
			/*$codigo = 200;
			echo json_encode(
				array("codigo" => $codigo)
			);*/
			include_once('../frontend/login.php');
		}
		else{		

		    /*
			$codigo = 404;
			echo json_encode(
				array("codigo" => $codigo)
			);*/
		}

	}
	else{
		$codigo = 400;
		echo json_encode(
			array("codigo" => $codigo)
		);
	}

    

?>

