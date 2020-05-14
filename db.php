<?php
    function conectarBase(){

        // $dsn = 'mysql:host=127.0.0.1;dbname=buitre_db;port3306';
        $dsn = 'mysql:host=190.210.222.204;dbname=buitre_db;port3306';
        $db_usr ='buitre';
        $db_pass = 'cancrinachja';

        try{
            $db=new PDO($dsn,$db_usr, $db_pass);
            
        }catch(PDOException $exeption){
            echo $exeption->getMessage();
            return null;
        }
        return $db;    
    }  

    function checaLogin(){
        if (!$_COOKIE["logeado"]):
            header('Location: login.php');
        endif;
    
//        if (!isset($_SESSION["usuario"])):
//            die("no se envio el usuario.");
//       endif;
    }
    
    function getLikes($postID){
        $db = conectarBase();

        $sqlstat = "select * from reacciones";
        $query = $db->prepare($sqlstat);
        $query->execute();

        $likes = $query->fetchAll(PDO::FETCH_ASSOC);

        $toLikes = "";
        foreach($likes as $like):
            //  var_dump($postID);
            $toLikes .= '<a href="dolike.php?id=' .$like['id'] .'&post=' .$postID .'">';
            $toLikes .= '<img src="imgs/reacciones/' .$like['icono'] .'" width="5%">';
            $toLikes .= "</a>";
        endforeach;

        return $toLikes;
    }

    function getComents($postID){
        $db = conectarBase();

        $sqlstat = "SELECT c.*, u.id u_id, u.imagen u_imagen, u.nombre u_nombre FROM comentarios c";
        $sqlstat .= " INNER JOIN usuarios u ON u.id = c.id_usuario";
        $sqlstat .= " WHERE id_post = :postID";
        $query = $db->prepare($sqlstat);
        $query->bindValue(':postID', $postID, PDO::PARAM_INT);
        $query->execute();
        $res = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($res);
        return $res;

    }

    function login($db){
        $query = $db->prepare('SELECT COUNT(username) FROM usuarios WHERE email = "'.$_POST["email"].'"');
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if($result['COUNT(username)'] == 1){
            $query = $db->prepare('SELECT password FROM usuarios WHERE email = "'.$_POST["email"].'"');
            $query->execute();
            $pass = $query->fetch(PDO::FETCH_ASSOC);
            if( password_verify($_POST["contrasenia"], $pass['password']) ){
                cargarSession($db);
                return true;
            }
        }
        return false;
    }

    function cargarSession($db){
        if (isset($_POST['email'])):
            $emailToSend = $_POST['email'];
        else:
            $emailToSend = $_COOKIE["email"];
        endif;
        $query = $db->prepare('SELECT COUNT(username) as contador FROM usuarios WHERE email = "'.$emailToSend.'"');
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if($result['contador'] == 1):
            $query = $db->prepare('SELECT id, nombre,  username, email, password, fecha_nac, genero_id, imagen FROM usuarios WHERE email = "' .$emailToSend .'"');
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);
            var_dump($result);
            $_SESSION["usuario"] = $result;
        else:
         //   var_dump($result);
         //   die("el cargar sesion no esta levantando lo correcto");
        endif;   

/**
        $usF = file_get_contents("usuarios.json");
        $listaUsuarios = json_decode($usF, true);
        $indiceU = 0;
//      foreach($listaUsuarios as $clave => $usuario){
        foreach($listaUsuarios as $usuario){
                if($_POST["email"] == $usuario["reg_email"]){
//                  $indiceU = $clave;
                    $_SESSION["usuario"] = $usuario;
            }
        }*/
/*      foreach($usA[$indiceU] as $clave => $dato){
            $_SESSION[$clave] = $dato;
        }
*/
     }


    function recordar($email, $contrasenia, $persiste){
        if ($persiste):
            $tiempo = time() + (60 * 60 * 24 * 30);
            setcookie("email", $email, $tiempo);
            setcookie("contrasenia", $contrasenia, $tiempo);
            setcookie("logeado", true, $tiempo);
        else:
            setcookie("email", $email);
            setcookie("contrasenia", $contrasenia);
            setcookie("logeado", true);
        endif;

    }

    function levanta($db){
            cargarSession($db);
            header('Location: posts.php');
    }

