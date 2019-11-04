<?php
 include ('conexao.php');
 $nome_cad = $_post['nome_cad'];
 $email_cad = $_post['email_cad'];
 $senha_cad = $_post['senha_cad'];
 $sql = "insert into v_control.usuarios (nome, senha, email) values ("' . $nome_cad . '", "' . $senha_cad . '", "' . $email_cad . '")"; 
 $result = mysqli_query($conn, $sql); 
?>