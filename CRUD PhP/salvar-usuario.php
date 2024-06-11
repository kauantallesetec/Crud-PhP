<?php 

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $nascimento = $_POST['nascimento'];

        $sql = "INSERT INTO usuario (nome, email, senha, nascimento) VALUES ('{$nome}', '{$email}', '{$senha}', '{$nascimento}')";
        break;
    case'editar':
        # code
        break;
    case 'excluir':
        #code 
        break;
    default:
        # code...
        break;
}
