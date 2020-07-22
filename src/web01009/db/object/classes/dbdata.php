<?php
class DbData
{
    protected $pdo;
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=php;charset=utf8';
        getenv('DB_HOST') && $dsn = 'mysql:host=' . getenv('DB_HOST') . ';dbname=php;charset=utf8';

        $user = 'kobe';
        $password = 'denshi';
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