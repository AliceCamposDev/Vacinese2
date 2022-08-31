<?php
require_once('../connection/connection.php');
class VaccineRepository{
    public static function get_vaccines(){
        $PDO = Connection::get_connection();
        $cmd = $PDO->prepare("SELECT nome FROM vacinese2.vacina");
        $cmd->execute();
        return $cmd->fetchAll(PDO::FETCH_ASSOC);
    }
}
