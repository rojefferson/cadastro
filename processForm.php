<?php
include("conn.php");
  $message_alert = '';

  if(isset($_POST['register'])) {
    $nome = mysqli_real_escape_string($con,$_POST['nome']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $dataNascimento =mysqli_real_escape_string($con, $_POST['dataNascimento']);
    $nomeMae = mysqli_real_escape_string($con,$_POST['NomeMae']);
    $veiculo = mysqli_real_escape_string($con,$_POST['veiculo']);
    $ano = mysqli_real_escape_string($con,$_POST['ano']);
    $caa = mysqli_real_escape_string($con,$_POST['caa']);
    $cpf = mysqli_real_escape_string($con,$_POST['cpf']);        
    $sql = "SELECT 0 FROM pessoa where cpf = '$cpf'";
    $result = $con->query($sql);
    if ($result->num_rows == 0 ) {
      $sql="INSERT INTO pessoa (nome,email,dataNascimento,nomeMae,veiculo,ano,caa,cpf) VALUES ('$nome','$email','$dataNascimento','$nomeMae','$veiculo','$ano','$caa','$cpf')";
      if (mysqli_query($con, $sql)) {
      };
           
     } else {
      echo "<script>alert('CPF cadastrado no sistema.');</script>";
    }
  }
?>