<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>
<body>
    <h2>ログイン</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
            <label for="username">ユーザー名</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">パスワード</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <input type="submit" value="ログイン">
        </div>
    </form>
    <?php if (isset($login_err)) echo "<p>$login_err</p>"; ?>
</body>
</html>