<?php
class DbData
{

    protected $pdo;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=minishop;charset=utf8';
        getenv('DB_HOST') && $dsn = 'mysql:host=' . getenv('DB_HOST') . ';dbname=minishop;charset=utf8';

        $user = 'mini';
        $password = 'shop';
        try {
            $this->pdo = new PDO($dsn, $user, $password);
        } catch (Exception $e) {
            echo 'Error:' . $e->getMessage();
            die();
        }
    }

    protected function query($sql, $array_params)
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($array_params);
        return $stmt;
    }

    protected function exec($sql, $array_params)
    {
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($array_params);
    }
}