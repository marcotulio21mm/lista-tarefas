<?php

        if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

            require_once("Sql.php");
            require_once("User.php");

            $u= new User();
            

            $email= addslashes($_POST['email']); 
            $senha= addslashes($_POST['senha']); 

            if($u->login($email, $senha)==true){

                if(isset($_SESSION['idusuario'])){

                    header("Location: tela.php");
                
                }else{

                    header("Location: index.php");
                }
            
            }else{
                
                header("Location: index.php");

            }
            

        }else{

            header("Location: index.php");
        }

    ?> 