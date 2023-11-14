<?php
class db
{
    private $user = "user";
    private $password = "user";

    function conecta_mysql()
    {
        $conecta = new  PDO('mysql:host=localhost;dbname=seducation;port=3310;charset=utf8', $this->user, $this->password);
        return $conecta;
    }
}
