<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo"href="/">
				FashionablyLate
      </a>
    </div>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Content</h2>
      </div>
      <form class="form">
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="name"placeholder="例:山田" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="name"placeholder="例:太郎" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div>
          <input type="radio" name="gender" value="男性" checked>男性
          <input type="radio" name="gender" value="女性">女性
          <input type="radio" name="gender" value="その他">その他
        </div>
        <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="例:test@example.com" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tel1" placeholder="080" />-
              <input type="tel" name="tel2" placeholder="1234"> -
              <input type="tel" name="tel3" placeholder="5678">
              <input type="hidden" name="PhoneNumber">
            </div>
          </div>
          <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
          </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <d class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="例:千駄ヶ谷マンション101" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </d\iv>
        </div>
        <div>
          <span class="form__label--item">お問い合わせの種類</span>
          <span class="form__label--required">※</span>
            <select name="select" placeholder="選択してください">
              <option value="">商品のお届けについて</option>
              <option value="">商品の交換について</option>
              <option value="">商品トラブル</option>
              <option value="">ショップへのお問い合わせ</option>
              <option value="">その他</option>
            </select>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html