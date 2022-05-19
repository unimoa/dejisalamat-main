@extends('layouts.frame')
@section('content')
<div id="login">
    <section>
      <div class="loginform">
        <form>
          <dl>
            <h2 class="icon">アカウントをお持ちの方はこちら</h2>
            <dt><span class="required"></span></dt>
            <dd><input type="email" name="email" class="email" placeholder="メールアドレス" required></dd>
            <dt><span class="required"></span></dt>
            <dd><input type="text" name="name" class="name" placeholder="パスワード" required></dd>
          </dl>
          <button type="submit" class="btn">ログイン</button>
        </form>
      </div>
    </section>
    <section>
      <div class="signupform">
        <form>
          <dl>
            <h2 class="icon">はじめての方はこちら</h2>
            <dt><span class="required">ニックネーム</span></dt>
            <dd><input type="text" name="name" class="name" required></dd>
            <dt><span class="required">メールアドレス</span></dt>
            <dd><input type="email" name="email" class="email" required></dd>
            <dt><span class="required">パスワード</span></dt>
            <dd><input type="text" name="name" class="name" required></dd>
          </dl>
          <button type="submit" class="btn">登録する</button>
          <div class="attention">
            <p>※「<span class="required"></span>」とついている項目は必須項目です。<br>※会員登録時に設定されたお名前が口コミ投稿時等に表示されます</p>
          </div>
        </form>
      </div>
    </section>
  </div>
  @endsection