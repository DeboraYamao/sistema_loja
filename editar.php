<?php //14/10/2021
    include 'conecta.php';
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $cidade = $_POST['cidade'];
    $data_nascimento = $_POST['data_nascimento'];
    $sql = "UPDATE pessoa SET nome = ?, email = ?, celular = ?, cidade = ?, data_nascimento = ? Where id = ?";//orientação a objeto
    $stmt = $conn->prepare($sql) or die($conn->error);//verificando se a query está ok
    if(!$stmt){
        echo 'Erro na atualização: '.$conn->errno.' - '.$conn->error;//outro modo de mostrar o erro
    }
    $stmt->bind_param('sssssi',$nome,$email,$celular,$cidade,$data_nascimento,$id);
    $stmt->execute();
    $conn->close();
    header("location: index.php");
?>