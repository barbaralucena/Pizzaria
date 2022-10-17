<?php
    require_once("models/model.base.php");

    class Users extends Base{
    public function getUsers(){
        $query= $this-> db-> prepare("
                SELECT
                    user_id, name, email, password, phone_number, street, postal_code, city
                FROM
                    users   
            ");
            $query-> execute();

            return $query-> fetchAll();
    }

    public function create($data){
        $data= $this-> sanitizer($data);
        $query= $this-> db-> prepare("
                INSERT INTO users
                (name, email, password, phone_number, street, postal_code, city)
                VALUES(?, ?, ?, ?, ?, ?, ?)
            ");

            $query-> execute([
                $data["name"],
                $data["email"],
                password_hash($data["password"], PASSWORD_DEFAULT),
                $data["phone_number"],
                $data["street"],
                $data["postal_code"],
                $data["city"],
            ]); 

            return $this-> db-> lastInsertId();
        }

        public function login($data){
            $query= $this-> db-> prepare("
                SELECT user_id, password
                FROM users
                WHERE email= ?
            ");

            $query-> execute([
                $data["email"]
            ]);

            $user= $query-> fetch();

            if(
                !empty($user) &&
                password_verify($data["password"], $user["password"])
            ){  
                return $user;
            }

            return [];
        }
    }
?>