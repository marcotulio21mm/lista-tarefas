<?php


class User{


    public function login($email, $senha){


        global $pdo;

        $sql= "SELECT * FROM tb_cadastro WHERE email=:e AND senha=:s";
        $sql= $pdo->prepare($sql);
        $sql->bindValue("e",$email);
        $sql->bindValue("s",$senha);
        $sql->execute();

        if($sql->rowCount()>0){

            $dado= $sql->fetch();

            $_SESSION['idusuario']= $dado['id'];

            return true;
        
        }else{

            return false;
        }


    }
}


?>