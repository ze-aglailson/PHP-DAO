<?php
    require_once("config.php");
/* 
    $sql = new Sql();

    $usuarios = $sql->select("SELECT * FROM tb_usuario");

    echo json_encode($usuarios); */

    #carrega um usuario
        /*$ze = new Usuario();

        $ze->loadById(2);

        echo $ze; */

    #Carrega uma lista de usuario
        /*$lista = Usuario::getList();
        echo json_encode($lista); */

    #Carrega uma lista de usuario pelo login buscado
        /*$busca = Usuario::search("jo");

        echo json_encode($busca);*/

    #Executando um login
        $usuario = new Usuario();
        try {
            $usuario->login("ze-aglailson","@senha");
            echo $usuario;    
        } catch (\Exception $error) {
            echo $error->getMessage();
        }
        

    
