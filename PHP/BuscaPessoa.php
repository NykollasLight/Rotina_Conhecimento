<?php

include "ConexaoBanco.php";

// $cpf = filter_input(INPUT_POST, "cpf");

    
//     $buscaInfo = "SELECT * FROM dados_pessoa 
//     INNER JOIN dados_contato ON dados_pessoa.cpf = contato_pess";

//     $resultInfo = mysqli_query($connect, $buscaInfo);

//     $linhas = mysqli_num_rows($resultInfo);

// for($i=0; $i<$linhas; $i++){

//     $colunas = mysqli_fetch_array($resultInfo);

//     $cpf = $colunas['cpf'];
//     $nome = $colunas['nome'];
//     $data = $colunas['data_nascimento'];
//     $endereco = $colunas['endereco'];
//     $salario = $colunas['salario'];
//     $celular = $colunas['telefone'];
//     $email = $colunas['email'];


//     echo "CPF: $cpf<br>
//           NOME: $nome<br>
//           DATA DE NASCIMENTO: $data<br>
//           ENDEREÇO: $endereco<br>
//           SALÁRIO DO FUNCIONÁRIO: $salario<br>
//           CELULAR: $celular<br>
//           E-MAIL: $email<br><br>";
         
//}

?>

    <h2>Atualização e Exclusão do cadastro funcionário:
    <form method="POST" action="AtualizaBanco.php">
        <p><input type="text" name="cpf" value="<?php echo $cpf; ?>">
        <input type="text" name="nome" value="<?php echo $nome; ?>"></p>
        <p><input type="text" name="data" value="<?php echo $data; ?>">
        <input type="text" name="endereco" value="<?php echo $endereco; ?>"></p>
        <p><input type="text" name="salario" value="<?php echo $salario; ?>">
        <input type="text" name="telefone" value="<?php echo $celular; ?>"></p>
        <input type="text" name="email" value="<?php echo $email; ?>">
        
        <p><input type="submit" value="excl." name="atualizar">
        <input type="submit" value="atual." name="atualizar"></p>
    </form>

    <!DOCTYPE html>
<hmtl>
    <form action="index.php" method="POST">
        <p><input type="submit" value="Voltar para o menu de cadastro"></p>
    </form>
</html>