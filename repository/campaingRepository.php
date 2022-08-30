<?php
require_once('../connection/connection.php');
class campaingRepository{
    public static function create_campaing ($dataFim,$dataInicio,$nomeCampanha){
        $PDO = Connection::get_connection();
        $cmd = $PDO->prepare("INSERT INTO `vacinese2`.`campanha` (`nome`,`vacina`,`inicio`,`fim`)VALUES(:nome,:vacina,:inicio,:fim);");
        $cmd->bindparam(":nome",$nomeCampanha);
        $cmd->bindparam(":vacina",$vacina);
        $cmd->bindparam(":inicio",$dataInicio);
        $cmd->bindparam(":fim",$dataFim);
        $cmd->execute();
        return $cmd->fetch();
    }
}