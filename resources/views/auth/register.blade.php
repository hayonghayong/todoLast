
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>会員登録</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        * {
            font-size:100%;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family:"Helvetica Neue", Helvetica, Arial;
            }
        body {
            background:hotpink;
            }
        h5 {
            text-align:center;
            margin-top:5px;
            color:rgba(0,0,0,.3);
            }
        /* h5 > a,a:visited {
            color:#fff;
            text-decoration:underline
            } */
        h5 > a:hover {
            text-decoration:none;
            }
        .form {
            background:#fff;
            border-radius:6px;
            padding:20px;
            padding-top:30px;
            width:300px;
            margin:50px auto;
            box-shadow:15px 15px 0px rgba(0,0,0,.1);
            margin-top:40%;
        }
        h1 {
            text-align:center;
            font-size:1.4em;
            font-weight:700;
            color:#ccc;
            margin-bottom:24px;
        }
        span {
            font-weight:200;
        }
        input {
            width:100%;
            background:#f5f5f5;
            border:0;
            padding:20px;
            border-radius:6px;
            margin-bottom:10px;
            border:1px solid #eee;
            }
        .btn {
            position:relative;
            width:50%;
            padding:10px;
            border-radius:6px;
            border:0;
            background:hotpink;
            margin-left:25%;
            font-size:1.2em;
            color:#fff;
            text-shadow:1px 1px 0px rgba(0,0,0,.1);
            box-shadow:0px 3px 0px #c1524e;
            }
        .btn:active {
            top:3px;
            box-shadow:none;
            }
        h6 {
            text-align:center;
            padding:20px;
            padding-top:35px;
            color:#777;
            cursor:pointer;
            }
         .register{
            color:black;
            text-align:right;
            margin-top:10px;
        }
    </style>
</head>


<div class="form">

<h1 class="card-header">{{ __('会員登録') }}</h1>

    <form method="POST" action="{{ route('register') }}">
    @csrf

    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('名前') }}</label>
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    @error('name')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
    @enderror
    
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    @error('email')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    @error('password')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
    @enderror
    
    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('パスワード確認') }}</label>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    
    <button type="submit" class="btn btn-primary">
    {{ __('登録') }}
    </button>

     <p class="register">
         <a href="{{ route('login') }}">戻る</a>
         </p>
    </div>