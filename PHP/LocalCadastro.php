<?php
	
    include "ConexaoBanco.php";

	if(isset($_GET["cpf"])){$cpf=$_GET["cpf"];}
	if(isset($_GET["nome"])){$nome=$_GET["nome"];}
	if(isset($_GET["data"])){$data=$_GET["data"];}
	if(isset($_GET["endereco"])){$endereco=$_GET["endereco"];}
	if(isset($_GET["salario"])){$salario=$_GET["salario"];}
	if(isset($_GET["senha"])){$senha=$_GET["senha"];}

	if(isset($_GET["celular"])){$celular=$_GET["celular"];}
	if(isset($_GET["email"])){$email=$_GET["email"];}

	try
	{
		$insercao=$connect->prepare("INSERT INTO dados_pessoa (cpf, nome, data_nascimento, endereco, salario) VALUES (?, ?, ?, ?, ?, ?)");
		$insercao->bindParam(1, $cpf);
		$insercao->bindParam(2, $nome);
		$insercao->bindParam(3, $data);
		$insercao->bindParam(4, $endereco);
		$insercao->bindParam(5, $salario);
		$insercao->bindParam(6, $senha);

		$insercao2=$connect->prepare("INSERT INTO dados_contato (celular, email, contato_pess) VALUES (?, ?, ?)");
		$insercao2->bindParam(1, $celular);
		$insercao2->bindParam(2, $email);
		$insercao2->bindParam(3, $contato_pess);

		$insercao->execute();
		$insercao2->execute();		

		if ($insercao && $insercao2->rowCount() > 0)
		{
			$cpf = null;
			$nome = null;
			$data = null;
			$endereco = null;
			$salario = null; 
			$senha = null;
			$celular = null;
			$email = null;
			$contato_pess = null;
			
			$retornoJSON = "inclusão feita com sucesso!";
		}
		else
		{
			$retornoJSON = "Erro ao efetivar o cadastro :(";
		}
	}
	catch(PDOException $erro)
	{
		$retornoJSON  = "Erro: " . $erro->getMessage();
	}

	echo $retornoJSON;

?>