<?php
require_once __DIR__ . '/dbdata.php';

class DbPhp extends DbData
{
    public function selectAll()
    {
        $sql = "select * from person";
        $stmt = $this->query($sql, []);
        $persons = $stmt->fetchAll();
        return $persons;
    }

    public function selectPerson($uid)
    {
        $sql = "select * from person where uid = ?";
        $stmt = $this->query($sql, [$uid]);
        $person = $stmt->fetch();
        return $person;
    }
    public function insertPerson($name, $cid, $age)
    {
        $sql =
            "insert into person ( name, company_id, age ) values ( ?, ?, ? )";
        $result = $this->exec($sql, [$name, $cid, $age]);
    }

    public function updatePerson($uid, $name)
    {
        $sql = "update person set name = ? where uid = ?";
        $result = $this->exec($sql, [$name, $uid]);
    }

    public function deletePerson($name)
    {
        $sql = "delete from person where name = ?";
        $result = $this->exec($sql, [$name]);
    }
}