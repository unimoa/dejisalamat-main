<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dejisalamat</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Opti:wght@700&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
<<<<<<< Updated upstream
      <div class="img"><a href="/top"><img src="/img/philoki.png" alt=""></a></div>
      <nav>
        <ul class="nav-ul hidden">
          <li><a href="/login">ログイン</a></li>
          <li><a href="#">ログアウト</a></li>
          <li><a href="/login">新規登録</a></li>
          <li><a href="/contact">お問い合わせ</a></li>
=======
      <div class="img"><img src="img/philoki.png" alt=""></div>
      <nav>
        <ul class="nav-ul hidden">
          <li><a href="/login">ログイン</a></li>
          <li><a href="/login">ログアウト</a></li>
          <li><a href="/register">新規登録</a></li>
          <li><a href="">お問い合わせ</a></li>
>>>>>>> Stashed changes
          <li><a href="#">お気に入り</a></li>
        </ul>
      </nav>
      <div class="hamburger"><span class='spam'></span></div>
    </header>
    @yield('content')
    <footer>
      <ul>
        <li><img src="img/transparent.png" alt="" /></li>
        <li>
          <ul>
            <li><a href="/login">ログイン</a></li>
            <li><a href="#">ログアウト</a></li>
            <li><a href="/register">新規登録</a></li>
            <li><a href="/contact">お問い合わせ</a></li>
          </ul>
        </li>
        <li>
          <div>会社概要</div>
          <div>プライバシーポリシー</div>
        </li>
        <li><p class="bigbrain">株式会社Bチーム</p></li>
        <li>＠TEAM-B 4th class members 2021</li>
      </ul>
    </footer>
  </body>
</html>
