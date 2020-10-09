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
    public function changeCartUserId($tempId, $userId)
    {
        require_once __DIR__ . '/cart.php';
        $cart = new Cart();
        $cart->changeUserId($tempId, $userId);
    }
    public function signUp($userId, $userName, $kana, $zip, $address, $tel, $password, $tempId)
    {
        $sql = "select * from users where userId = ?";
        $stmt = $this->query($sql, [$userId]);
        $result = $stmt->fetchAll();
        // 登録しようとしているユーザーID(Eメール)が既に登録されている場合
        if ($result) {
            return 'この' . $userId . ' は既に登録されています。';
        }
        $sql = "insert into users values(?, ?, ?, ?, ?, ?, ?)";
        $result = $this->exec($sql, [$userId, $userName, $kana, $zip, $address, $tel, $password]);
        if ($result) {
            $this->changeCartUserId($tempId, $userId);
            return '';
        } else {
            return '新規登録できませんでした。管理者にお問い合わせください。';
        }
    }
}
