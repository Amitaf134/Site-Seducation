<?php
class db
{
    private $host = "localhost";
    private $user = "user";
    private $password = "user";
    private $database = "seducation";
    private $port = 3310;

    function conecta_mysql()
    {
        $conecta = new  PDO('mysql:host=localhost;dbname=seducation;port=3306;charset=utf8', $this->user, $this->password);
        return $conecta;
    }
}
