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
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
</head>
<body>
    <main>
        <div class="thanks__content">
            <div class="thanks_bg">Thank you</div>
            <div class="thanks_txt">
                <p>お問い合わせありがとうございました</p>
                <a href="{{ route('home') }}"class="home_button">HOME</a>
            </div>
        </div>
    </main>
</body>

</html>