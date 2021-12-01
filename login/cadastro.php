<?php

include_once 'conexao.php';

$login = $_POST['login'];

$senha = MD5($_POST['senha']);
 
//----------------------------------------------------------

$sql = "SELECT login FROM usuarios WHERE login = '$login'";
    //echo $sql;

    if(mysql_query($sql,$pdo)){
        $msg = "Gravado com sucesso!";
    }else{
        $msg = "Erro ao gravar!";
    }
    mysql_close($pdo);

//----------------------------------------------------------
$query_select = "SELECT login FROM usuarios WHERE login = '$login'";

$select = mysql_query($query_select,$pdo);

$array = mysql_fetch_array($select);

$logarray = $array['login'];

 

  if($login == "" || $login == null){

    echo "<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";

    }else{

      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";

        die();

 

      }else{


        $sql = "INSERT INTO usuarios (login,senha) VALUES (‘$login’,’$senha’)";
    //echo $sql;

    if(mysql_query($sql,$pdo)){
        echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";

    }else{
        echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";

    }
    mysql_close($pdo);

        
      }
      

    

?>