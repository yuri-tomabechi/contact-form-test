<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
    </div>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text name-inputs">
              <input type="text" name="last_name" placeholder="例：山田" value="{{ old('last_name') }}" />
              <input type="text" name="first_name" placeholder="例：太郎" value="{{ old('first_name') }}"/>
            </div>
            <div class="form__error">
                @error('last_name')
                    {{ $message }} 
                @enderror
                @error('first_name')
                    {{ $message }} 
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            {{-- <div class="form__input--text gender-inputs">
              <input type="radio" id="gender_male" name="gender" value="male" class="first-gender" />
              <label for="gender_male">男性</label>
              <input type="radio" id="gender_female" name="gender" value="female">
              <label for="gender_female">女性</label>
              <input type="radio" id="gender_other" name="gender" value="other" >
              <label for="gender_other">その他</label>
            </div> --}}
            <div class="form__input--text gender-inputs">
                <input type="radio" id="gender_male" name="gender" value="male" 
                {{ old('gender') == 'male' ? 'checked' : '' }} />
                <label for="gender_male">男性</label>

                <input type="radio" id="gender_female" name="gender" value="female"
                {{ old('gender') == 'female' ? 'checked' : '' }} />
                <label for="gender_female">女性</label>

                <input type="radio" id="gender_other" name="gender" value="other"
                {{ old('gender') == 'other' ? 'checked' : '' }} />
                <label for="gender_other">その他</label>
            </div>

            <div class="form__error">
                @error('gender')
                    {{ $message }} 
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="例：test@example.com" value="{{ old('email') }}"/>
            </div>
            <div class="form__error">
                @error('email')
                    {{ $message }} 
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text tel-inputs">
              <input type="tel" name="tel[0]" maxlength="4" placeholder="080" value="{{ old('tel.0') }}"/> - 
              <input type="tel" name="tel[1]" maxlength="4" placeholder="1234" value="{{ old('tel.1') }}"/> - 
              <input type="tel" name="tel[2]" maxlength="4" placeholder="5678" value="{{ old('tel.2') }}"/>
            </div>
            <div class="form__error">
                @error('tel.*')
                    {{ $message }} 
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}"/>
            </div>
            <div class="form__error">
                @error('address')
                    {{ $message }} 
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}"/>
            </div>
            <div class="form__error">
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content select-wrap">
            {{-- <select name="category">
                <option value="" disabled selected >
                    <span>選択してください</span>
                </option>
                <option value="delivery">商品のお届けについて</option>
                <option value="replace">商品の交換について</option>
                <option value="trouble">商品トラブル</option>
                <option value="contact">ショップへの問い合わせ</option>
                <option value="other">その他</option>
            </select> --}}
            <select name="category">
                <option value="" disabled {{ old('category') ? '' : 'selected' }}>選択してください</option>
                <option value="delivery" {{ old('category') == 'delivery' ? 'selected' : '' }}>商品のお届けについて</option>
                <option value="replace" {{ old('category') == 'replace' ? 'selected' : '' }}>商品の交換について</option>
                <option value="trouble" {{ old('category') == 'trouble' ? 'selected' : '' }}>商品トラブル</option>
                <option value="contact" {{ old('category') == 'contact' ? 'selected' : '' }}>ショップへの問い合わせ</option>
                <option value="other" {{ old('category') == 'other' ? 'selected' : '' }}>その他</option>
            </select>
            <div class="form__error">
                @error('category')
                    {{ $message }} 
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="detail" placeholder="資料をいただきたいです">{{ old('detail') }}</textarea>
            </div>
            <div class="form__error">
                @error('detail')
                    {{ $message }} 
                @enderror
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

</html>
