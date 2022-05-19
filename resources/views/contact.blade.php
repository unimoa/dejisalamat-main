@extends('layouts.frame')
@section('content')
<section>
    <div class="contactform">
      <div class="conatactdl">
        <dl>
          <h1 class="icon">お問い合わせ</h1>
          <form action="{{ route('contact.store',$event->id)}}" method="POST">
            <dt><span class="required">お名前</span></dt>
            <dd><input type="text" name="name" class="name" required></dd>
            <dt><span class="required">メールアドレス</span></dt>
            <dd><input type="email" name="email" class="email" required></dd>
            <dt>お問い合わせ内容</dt>
            <dd><textarea name="message" class="message"></textarea></dd>
            <button type="submit" class="btn">送信する</button>
        </dl>
      </div>
    </div>
  </section>
@endsection
