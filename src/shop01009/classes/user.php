<?php
// スーパークラスであるDbDataを利用するため
require_once __DIR__ . '/dbdata.php';
class User extends DbData
{
// ログイン認証処理
    public function authUser($userId, $password)
    {
        $sql = "select * from users where userId = ? and password = ?";
        $stmt = $this->query($sql, [$userId, $password]);
        return $stmt->fetch();
    }
}
