<?php
    session_start();
    if(!isset($_SESSION['login']))
    {
        header("LOCATION:index.php");
        exit();
    }
    if(isset($_POST['nom']))
    {
        $err = 0;
        if(empty($_POST['nom']))
        {
            $err = 1;
        }else{
            $nom = htmlspecialchars($_POST['nom']);
        }
        if(empty($_POST['date']))
        {
            $err = 2;
        }else{
            $nom = htmlspecialchars($_POST['date']);
        }
        if(empty($_POST['description']))
        {
            $err = 3;
        }else{
            $nom = htmlspecialchars($_POST['description']);
        }
        if(empty($_POST['categorie']))
        {
            $err = 4;
        }else{
            $nom = htmlspecialchars($_POST['categorie']);
        }
        if(empty($_POST['cover']))
        {
            $err = 5;
        }else{
            $nom = htmlspecialchars($_POST['cover']);
        }
        if($err == 0)
        {

        }else{
            header("LOCATION:addProduct.php?error=".$err);
            exit();
        }
    }else{
        header("LOCATION:index.php");
        exit();
    }
?>