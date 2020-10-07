<header>
<h2><a href="<?=$index_php?>">ようこそ!ショッピングサイトへ</a></h2> <p><?=$userName?>さん</p>
<ul class="navi">
<li><a href="<?=$index_php?>">トップページ</a></li> <li>|</li>
<li><a href="<?=$order_history_php?>">注文履歴</a></li> <li>|</li>
<li><a href="<?=$cart_list_php?>">カート</a></li>
<li>|</li> <?php
if ($userName === "ゲスト") {
    echo '<li><a href="' . $login_php . '">ログイン</a></li>';
} else {
    echo '<li><a href="' . $signup_php . '">ユーザー情報</a></li>';
    echo '<li>|</li><li><a href="' . $logout_php . '">ログアウト</a></li>';
}?>
</ul> <hr>
</header>
