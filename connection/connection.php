<?php
class Connection
{
    public static function get_connection()
    {
        $dsn = "mysql:host=26.226.122.242;dbname=vacinese2;charset=utf8";
        $usuario = "root";
        $senha = "pwd";

        try {
            $PDO = new PDO($dsn, $usuario, $senha);
            return $PDO;
            //echo "<h1>connected</h1>";
        } catch (PDOException $erro) {
            //echo "<h1>connection failed</h1>";
            return;
        }
    }
}
