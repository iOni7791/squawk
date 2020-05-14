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

//    function checaLogin(){ //Comenté estas líneas porque no me dejaban entrar al index
//        if (!$_COOKIE["logeado"]): //Comenté estas líneas porque no me dejaban entrar al index
//            header('Location: login.php'); //Comenté estas líneas porque no me dejaban entrar al index
//        endif; //Comenté estas líneas porque no me dejaban entrar al index
    
//        if (!isset($_SESSION["usuario"])):
//            die("no se envio el usuario.");
//       endif;
//    } //Comenté estas líneas porque no me dejaban entrar al index
    
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