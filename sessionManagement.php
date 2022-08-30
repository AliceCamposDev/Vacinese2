<?php
require_once("repository/customerRepository.php");

class SessionManagement {
    public static function start_session(){
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
        }
    }
    public static function is_user_logged(){

        SessionManagement::start_session();

        if(isset($_SESSION["logged"])){
            return boolval($_SESSION["logged"]);
        }
        return false;
    }
    
    public static function log_user($cpf, $senha){
        SessionManagement::start_session();
        if (empty($cpf) || empty($senha)){
            $_SESSION["logged"] = false;
            return $_SESSION["logged"];
        }
    
        $_SESSION["logged"] =  CustomerRepository::get_customer_by_login($cpf,$senha);

        return $_SESSION["logged"];
    }
}


