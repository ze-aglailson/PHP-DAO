<?php
    require_once("config.php");
/* 
    $sql = new Sql();

    $usuarios = $sql->select("SELECT * FROM tb_usuario");

    echo json_encode($usuarios); */

    $ze = new Usuario();

    $ze->loadById(2);

    echo $ze;
