<?php

	include "ConexaoBanco.php";
    
	// $cpf = filter_input(INPUT_POST, "cpf");
	// $nome = filter_input(INPUT_POST, "nome");
	// $data = filter_input(INPUT_POST, "data");
	// $endereco = filter_input(INPUT_POST, "endereco");
	// $salario = filter_input(INPUT_POST, "salario");
	
    // $telefone = filter_input(INPUT_POST, "telefone");
    // $email = filter_input(INPUT_POST, "email");

	// $botao = filter_input(INPUT_POST, "atualizar");


	// //atualizar
	// if($botao == "atual."){
		

	// 	$atualPessoa = "UPDATE dados_pessoa SET nome = '$nome' , endereco = '$endereco', salario = '$salario' WHERE cpf = '$cpf'";
	// 	$atualContato = "UPDATE dados_contato SET telefone = '$telefone', email = '$email' WHERE contato_pess = '$cpf'";

	// 	$resultPessoa = mysqli_query($connect, $atualPessoa);
	//     $resultContato = mysqli_query($connect, $atualContato);

	// 	if($resultPessoa){
			
    //         echo "Informações pessoais atualizadas com sucesso";
			
    //         header("location: index.php");
	// 	}else{
			
    //         echo "erro ao atualizar informações pessoais";
	// 	}

    //     if($resultContato){
			
    //         echo "Informações de contato atualizadas com sucesso";
			
    //         header("location: index.php");
	// 	}else{
			
    //         echo "erro ao atualizar informações de contato";
	// 	}
	// //excluir
	// }else if($botao == "excl."){
		
	// 	echo "$cpf";

	// 	$delPessoa = "DELETE FROM dados_pessoa WHERE cpf = '$cpf'";
 	// 	$delContato = "DELETE FROM dados_contato WHERE contato_pess = '$cpf'";

	// 	$ResultPessoa = mysqli_query($connect, $delPessoa);
	//     $ResultContato = mysqli_query($connect, $delContato);

  	// 	if($ResultPessoa){
			
    //         echo "Informações do funcionário deletadas com sucesso";
			
    //         header("location: index.php");
	// 	}else{
			
    //         echo "erro ao deletar informações do funcionário";
	// 	}

    //     if($ResultContato){
			
    //         echo "Informações de contato deletadas com sucesso";
			
    //         header("location: index.php");
	// 	}else{
			
    //         echo "erro ao deletar informações de contato";
	// 	}

	// }

?>
