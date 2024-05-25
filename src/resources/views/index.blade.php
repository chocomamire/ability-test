<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
    </header>

    <div class="contact__content">
        <p style="color: #8B7969;">Contact</p>
            <form class="create-form">
                <div class="create-form__item">
                    <label for="name">お名前</label>
                    <input class="create-form__item-input" type="text" name="content">
                </div>
                <div class="create-form__item">
                    <input class="create-form__item-input" type="text" name="content">
                </div>
                <div class="create-form__item">
                    <label for="name">性別</label>
                    <input class="create-form__item-input" type="radio" name="content">
                    <label for="male">男性</label>
                    <input class="create-form__item-input" type="radio" name="content">
                    <label for="female">女性</label>
                    <input class="create-form__item-input" type="radio" name="content">
                    <label for="else">その他</label>
                </div>
                <div class="create-form__item">
                    <label for="name">メールアドレス</label>
                    <input class="create-form__item-input" type="email" name="content">
                </div>
                <div class="create-form__item">
                    <label for="name">電話番号</label>
                    <input class="create-form__item-input" type="tel" name="content">
                </div>
                <div class="create-form__item">
                    <label for="name">住所</label>
                    <input class="create-form__item-input" type="text" name="content">
                </div>
                <div class="create-form__item">
                    <label for="name">建物名</label>
                    <input class="create-form__item-input" type="text" name="content">
                </div>
                <div class="create-form__item">
                    <label for="name">お問い合わせの種類</label>
                    <input class="create-form__item-input" type="checkbox" name="content">
                </div>
                <div class="create-form__item">
                    <label for="name">お問い合わせ内容</label>
                    <textarea class="create-form__item-input" name="textarea" cols="30" rows="5"></textarea>
                </div>
                <div class="create-form__button">
                    <button class="create-form__button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </div>
</body>

</html>