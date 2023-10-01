<?php

	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    $in_bd = include_once 'banco.php';
	$in_user = include_once 'usuario.php';	
	
	$banco = new BancoDados();
	$conexao = $banco->getConexao();
	
	$usuario = new Usuario($conexao);
	
	$dadosArray = file_get_contents('php://input');
	parse_str($dadosArray, $dados);
	
	if(isset($dados['email']) && isset($dados['senha'])){
		$user = $usuario->getUsuario($dados['email'], $dados['senha']);
		if($user){

			header("location: ../frontend/index.php");
			
			exit();
			echo 'Deu problema 3';

			
			/*$codigo = 200;
			echo json_encode(
				array("codigo" => $codigo)
			);*/
		}
		else{
			$codigo = 404;
			echo json_encode(
				array("codigo" => $codigo)
			);
		}
	}
	else{
		$codigo = 400;
		echo json_encode(
			array("codigo" => $codigo)
		);
	}
?>

