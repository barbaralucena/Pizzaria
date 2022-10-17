<?php
    $title="Efetuar Login";

    if(isset($_POST["send"])){
        if(
            !empty($_POST["email"])&&
            !empty($_POST["password"])&&
            filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)&&
            mb_strlen($_POST["password"])>= 8 &&
            mb_strlen($_POST["password"])<= 1000
        ){
            require("models/model.users.php");
            $modelUsers= new Users();

            $user= $modelUsers->login($_POST);

            if(!empty($user)){
                unset($user["password"]);
                $_SESSION["user"]= $user;                
                header("Location: /");
                exit;
            }
        }
        $message= "Dados incorretos, por favor confirme se escreveu o seu email ou password corretamente";
    }
    
    require("views/view.login.php");
?>