<?php
require_once __DIR__ . '/dbdata.php';

class Product extends DbData
{
    public function getItems($genre)
    {
        $sql = "select * from items where genre = ?";
        $stmt = $this->query($sql, [$genre]);
        $items = $stmt->fetchAll();
        return $items;
    }

    public function getItem($ident)
    {
        $sql = "select * from items where ident = ?";
        $stmt = $this->query($sql, [$ident]);
        $item = $stmt->fetch();
        return $item;
    }
}