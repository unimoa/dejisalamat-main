@extends('layouts.frame')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('アカウントをお持ちの方はこちら') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ログイン') }}
                                </button>

                                @if (Route::has('password.request'))
                                <div class="btn-f">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>                                    
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <section>
              <div class="signupform">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <dl>
                        <h2 class="icon">はじめての方はこちら</h2>
                        <dt><span class="required">ニックネーム</span></dt>
                        <dd><input type="text" name="name" class="name" required></dd>
                        <dt><span class="required">メールアドレス</span></dt>
                        <dd><input type="email" name="email" class="email" required></dd>
                        <dt><span class="required">パスワード</span></dt>
                        <dd><input type="password" name="password" class="name" required></dd>
                        <dt><span class="required">パスワード確認</span></dt>
                        <dd><input type="password" name="password_confirmation" class="name" required></dd>
                    </dl>
                    <button type="submit" class="btn">登録する</button>
                    <div class="attention">
                        <p>※「<span class="required"></span>」とついている項目は必須項目です。<br>※会員登録時に設定されたお名前が口コミ投稿時等に表示されます</p>
                    </div>
                </form>
              </div>
            </section>
        </div>
        </div>
    </div>
</div>
@endsection