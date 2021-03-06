<?php

  /**
  * Class de gestion des sessions PHP
  */
  class session {

    // constructeur, on demarre les session des l'instanciation de la classe
    public function __construct(){

      session_start();

    }

    // permet d'ajouter l'utilisateur a la session
    public function createUserSession($userid, $username){

      $_SESSION["userid"] = $userid;
      $_SESSION["username"] = $username;

    }

    // verifie que l'utilisateur a bien une session
    public function verifyUserSession(){

      if(!isset($_SESSION['username']) && !isset($_SESSION['userid'])){

        session_destroy();

        header("Location: login");

        exit();

      } else {

        return true;

      }

    }

    // pour arreter une session
    public function destroySession(){

      session_destroy();

      header("Location: login");

      exit();

    }

    // renvoie le nom de l'utilisateur stoqué dans la bd
    public function getUser(){

      return $_SESSION["username"];

    }

    // renvoie l'id de l'utilisateur stoqué dans la session
    public function getUserID(){

      return $_SESSION["userid"];

    }

    // renvoie l'id de l'utilisateur stoqué dans la session
    public function activeEdit($id){

      $_SESSION["activeEdit"] = $id;

    }

    // renvoie l'id de l'utilisateur stoqué dans la session
    public function getEdit(){

      return $_SESSION["activeEdit"];

    }

  }
