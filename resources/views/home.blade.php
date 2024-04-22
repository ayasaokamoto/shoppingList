<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>かいものリスト</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>かいものリスト</h1>

        <div class="box">
            <button type="button" class="user-icon"><img src="img/user-icon.svg" alt="ユーザーアイコン""></button>
            <button type="button" class="logout-icon"><img src="img/logout-icon.svg" alt="ログアウトアイコン"></button>
	    </div>
    </header>

    <!-- <nav>
        <ul class="tabs">
            <li class="tab">
                <p>かう</p>
                <img src="img/buy.svg" alt="タブ1アイコン">
            </li>
            <li class="tab">
                <p>かった</p>
                <img src="img/bought.svg" alt="タブ2アイコン">
            </li>
            <li class="tab">
                <p>いつもの</p>
                <img src="img/favorite.svg" alt="タブ3アイコン">
            </li>
        </ul>
    </nav> -->

<!-- リスト表示 -->
    <section class="wrap">
        <div class="inner">
            <!-- action追記する -->
            <form method="post" action="">
                <button type="button">
                    <span></span>
                </button>
            </form>
            <div class="shopping-form">
                <div class="item">
                    <div class="item-detail">
                        <div class="item-left">
                            <div class="circle-icon" id="icon"></div>
                            <input type="text" name="list-content"placeholder="" value="テスト">
                            <input type="hidden" name="id" value="">
                        </div>
                        <div class="item-right">
                            <button type="submit" class="check-icon">
                                <img src="img/bought.svg" alt="チェックアイコン">
                            </button>
                            <button type="button">
                                <img src="img/dot.png" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- フローティングボタン(item追加ボタン) -->
            <!-- action追記する -->
            <form method="post" action="">
                <button type="button" class="open-icon floating-button add-modal">
                    <span class="plus-icon"></span>
                </button>
            </form>
        </div>
    </section>
</body>

</html>
