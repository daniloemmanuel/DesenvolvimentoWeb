<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<?php
    if(isset($_GET["isAutenticate"])){
        $isAutenticate = $_GET["isAutenticate"];
    }else{    
        $isAutenticate = false;
    }  
    
    if(!$isAutenticate){    
            //echo "Usuário não autenticado!!!";
            include("formLogin.php");
    }else{
            echo "Usuário Autenticado!";
            
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <h1>Página Principal Protegida</h1>

</body>
</html>
<?php
    }
?>