<?php
    include_once 'conexao.php';

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $nascimento = $_POST['data_nasc'];
    $area_conhecimento = $_POST['area_conhecimento'];
    $curso = $_POST['curso'];
    $email = $_POST['email'];
    
    $senha = $_POST['senha'];
    $confirma = $_POST['conf_senha'];

    
    if($senha != $confirma){
        echo "Valores incorretos, digite novamente!";
    }
    
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        
        $con = mysqli_connect($localhost, "root", "root", "cadastro");
        $sql = mysqli_query($con ,`SELECT * FROM usuarios WHERE email = $email`);
        
        if(mysqli_num_rows($sql) > 0){
            echo "E-mail já cadastrado!";
        }else{
            echo "Cadastro realizado com sucesso!";
        }
    }
    
    $inserir = `INSERT INTO usuarios VALUES(null, $nome, $sobrenome, $nascimento, $area_conhecimento, $curso, $email, $senha)`;
    
?>