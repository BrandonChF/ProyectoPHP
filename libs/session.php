<?php

class Session{
    function __construct(){

    }
    function connectionSession(){
        if(!isset($_SESSION)){
            session_start();
        }  
    }

    function isAuthenticated()
    {
      if (isset($_SESSION['id'])) {
        return true;
      } else {
        return false;
      }
    }

}



?>