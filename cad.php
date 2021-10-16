<?php //14/10/2021
    include 'conecta.php';//para se conectar ao banco
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $cidade = $_POST['cidade'];
    $data_nascimento = $_POST['data_nascimento'];
    $sql = "INSERT INTO pessoa(nome,email,celular,cidade,data_nascimento) VALUES('$nome','$email','$celular','$cidade','$data_nascimento')";
    if(mysqli_query($conn,$sql))//query = inserção
    {
        echo "<script language='javascript' type='text/javascript'>
        alert('Registro inserido com sucesso!');
        window.location.href='index.php';
        </script>";
    }
    else{
        echo "<script language='javascript' type='text/javascript'>
        alert('Registro não foi inserido com sucesso!');
        window.location.href='index.php';
        </script>";        
    }
    mysqli_close($conn);//SEMPRE fechar o banco, para otimização do sistema
?>