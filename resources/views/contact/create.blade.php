@extends('layouts.frame')
@section('content')
<section>
    <div class="contactform">
      <div class="conatactdl">
        <dl>
          <form action="{{ route('contact.store')}}"  method="post">
            @csrf
              <h1 class="icon">お問い合わせ</h1>
            <dt><span class="required">お名前</span></dt>
            <dd><input type="text" name="name" class="name" required></dd>
            <dt><span class="required">メールアドレス</span></dt>
            <dd><input type="email" name="email" class="email" required></dd>
            <dt>お問い合わせ内容</dt><dd>
            <textarea name="message" class="message"></textarea></dd>
            <button type="submit" class="btn">送信する</button>
          </form>
        </dl>
        <div class="attention">
          <p>※「<span class="required"></span>」とついている項目は必須項目です。<br>※お問い合わせ送信後、2営業日以内に担当者よりご連絡いたします。</p>
        </div>
      </div>
    </div>
  </section>
@endsection
