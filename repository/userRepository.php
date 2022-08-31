<?php
require_once('../connection/connection.php');
class UserRepository{

    public static function get_user_by_search($search){ 
        $PDO = Connection::get_connection();
        $cmd = $PDO->prepare("SELECT id FROM vacinese2.paciente WHERE cpf = :search or nome like '%$search%' or sobrenome like '%$search%'");
        $cmd->bindparam(":search", $search);
        $cmd->execute();
        return $cmd->fetchAll(PDO::FETCH_ASSOC);
    } 

    public static function get_user_name($id){
        $PDO = Connection::get_connection();
        $cmd = $PDO->prepare("SELECT nome FROM vacinese2.paciente WHERE id = :id");
        $cmd->bindparam(":id", $id);
        $cmd->execute();
        return $cmd->fetch();
    }

    public static function get_user_surname($id){
        $PDO = Connection::get_connection();
        $cmd = $PDO->prepare("SELECT sobrenome FROM vacinese2.paciente WHERE id = :id");
        $cmd->bindparam(":id", $id);
        $cmd->execute();
        return $cmd->fetch();
    }

    public static function get_user_birthday($id){
        $PDO = Connection::get_connection();
        $cmd = $PDO->prepare("SELECT nascimento FROM vacinese2.paciente WHERE id = :id");
        $cmd->bindparam(":id", $id);
        $cmd->execute();
        return $cmd->fetch();
    }

    public static function get_user_cpf($id){
        $PDO = Connection::get_connection();
        $cmd = $PDO->prepare("SELECT cpf FROM vacinese2.paciente WHERE id = :id");
        $cmd->bindparam(":id", $id);
        $cmd->execute();
        return $cmd->fetch();
    }

    public static function get_user_gender($id){
        $PDO = Connection::get_connection();
        $cmd = $PDO->prepare("SELECT genero FROM vacinese2.paciente WHERE id = :id");
        $cmd->bindparam(":id", $id);
        $cmd->execute();
        return $cmd->fetch();
    }

    public static function get_user_email($id){
        $PDO = Connection::get_connection();
        $cmd = $PDO->prepare("SELECT email FROM vacinese2.paciente WHERE id = :id");
        $cmd->bindparam(":id", $id);
        $cmd->execute();
        return $cmd->fetch();
    }

    public static function get_user_phone($id){
        $PDO = Connection::get_connection();
        $cmd = $PDO->prepare("SELECT telefone FROM vacinese2.paciente WHERE id = :id");
        $cmd->bindparam(":id", $id);
        $cmd->execute();
        return $cmd->fetch();
    }
}