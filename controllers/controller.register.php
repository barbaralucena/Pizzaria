<?php
    require("models/model.users.php");
    $modelUsers= new Users();
    $users= $modelUsers-> getUsers();

    $emails= [];

    foreach($users as $user){
        $emails[]= $user["email"];
    }
    $title="Criar conta";
    session_unset();
    if(
        isset($_POST["send"])
    ){
        if(
            
            !empty($_POST["name"])&&
            !empty($_POST["email"])&&
            !empty($_POST["password"])&&
            !empty($_POST["password_repeated"])&&
            !empty($_POST["phone_number"])&&
            !empty($_POST["street"])&&
            !empty($_POST["postal_code"])&&
            !empty($_POST["city"])&&

            mb_strlen($_POST["name"])>= 3                       &&
            mb_strlen($_POST["name"])<= 64                      &&
            mb_strlen($_POST["password"])>= 8                   &&
            mb_strlen($_POST["password"])<= 1000                &&
            mb_strlen($_POST["password_repeated"])>= 8          &&
            mb_strlen($_POST["password_repeated"])<= 1000       &&
            mb_strlen($_POST["phone_number"])>= 3               &&
            mb_strlen($_POST["phone_number"])<= 30              &&
            mb_strlen($_POST["street"])>= 8                     &&
            mb_strlen($_POST["street"])<= 120                   &&
            mb_strlen($_POST["postal_code"])>= 4                &&
            mb_strlen($_POST["postal_code"])<= 32               &&
            mb_strlen($_POST["city"])>= 4                       &&
            mb_strlen($_POST["city"])<= 32                    
        ){
            if(!in_array($_POST["email"], $emails)){
                $user= $modelUsers-> create($_POST);

                    if(!empty($user)){
                    $_SESSION["user"]= $user;
                    header("Location: /");
                    }
                    else{
                    http_response_code(500);
        
                    $message= "Internal Server Error";
                    $title= "Error";

                    require("views/view.error.php");
                    exit;
                    }
                }
            else{
                $message= "Email indisponível";
            }
        }
        else{
            $message= "Por favor preencha todos os campos corretamente";
        }
    }
    
    require("views/view.register.php");
?>