<?php
//empty = vazia
//isset = se existe variável
if(
    isset($_POST["login"]) &&
    isset($_POST["password"]) &&
    !empty($_POST["login"]) &&
    !empty($_POST["password"])
){
    $login = $_POST["login"];
    $password = $_POST["password"];
    
    //echo "Login = $login";
    //echo "<br>Password = $password";

    $loginBd = "rafael";
    $passwordBd = "qwe123";

    if($login == $loginBd){
        if($password == $passwordBd){
           //echo "Usuário Autenticado";
           $isAutenticate = true;          
           header("location: index.php?isAutenticate=". $isAutenticate);           

        }else{
           $mensagem = "Senha incorreta, tentar novamente";
           header("location: formLogin.php?mensagem=". $mensagem);
        }
    }else{
        $mensagem= "Login não existe, tentar novamente";
        header("location: formLogin.php?mensagem=". $mensagem);
    }
    
}else{
  $mensagem= "Campos não preenchidos";
  header("location: formLogin.php?mensagem=". $mensagem);
}