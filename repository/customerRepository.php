<?php
require_once('../connection/connection.php');
class CustomerRepository{
    public static function get_customer_by_login($cpf,$senha){//TODO: mudar nome da função 
        $PDO = Connection::get_connection();
        $cmd = $PDO->prepare("SELECT 1 FROM vacinese2.funcionario WHERE cpf = :cpf AND senha = :senha");
        $cmd->bindparam(":cpf", $cpf);
        $cmd->bindparam(":senha", $senha);
        $cmd->execute();
        return $cmd->fetch();
    }

}