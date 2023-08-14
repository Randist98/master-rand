<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assest/css/registration.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/6c65479865.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <div class="container" onclick="">
        <div class="top"></div>
        <div class="bottom"></div>
        <div class="center">
            <form action="{{ route('login.check') }}" method="post" novalidate id="login-form">
                @csrf
                <div id="backhome"><a href="{{route('index')}}"><i class="fa-solid fa-house" style="color:rgb(255, 200, 92)"></i></a></div>
                <h2>Please Log in </h2>
            <div class="social-container">
                <a href="#" class="social1"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social2"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social3"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <input type="email" style="width: 100%; padding: 10px; margin-bottom: 10px;"  name="email" class="form-control{{ $errors->has('email') || (Session::has('login-error') && !empty(Session::get('login-error'))) ? ' is-invalid' : '' }}" id="floatingInputSignIn" placeholder="Email" value="{{ old('email') }}">
            @if ($errors->has('email') || (Session::has('login-error') && !empty(Session::get('login-error'))))
                <span class="invalid-feedback email-error">
                    <strong id="color1">{{ $errors->first('email')}}</strong>
                    <strong id="color1">{{Session::get('login-error') }}</strong>
                </span>
            @endif
            <strong id="color1"><span id="email-error-login" ></span></strong>

            <input type="password" name="password" style="width: 100%; padding: 10px; margin-bottom: 10px;" class="form-control{{ $errors->has('password') || (Session::has('login-error') && !empty(Session::get('login-error'))) ? ' is-invalid' : '' }}" id="password-login" placeholder="Password">
            @if ($errors->has('password') || (Session::has('login-error') && !empty(Session::get('login-error'))))
                <span class="invalid-feedback password-error">
                    <strong id="color1">{{ $errors->first('password')}}</strong>
                    <strong id="color1">{{Session::get('login-error') }}</strong>
                </span>
            @endif

            <strong id="color1"><span id="password-error-login"></span></strong>

            <button type="submit" style="background-color: rgb(89, 136, 107); color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px;">
                <span class="material-icons" style="vertical-align: middle;">login</span> Login
            </button>
            <h2>&nbsp;</h2>
            </form>
            <p style="text-align: center; margin-top: -40px;">You don't have account? <a href="{{ route('sign-up.index') }}" style="color: #007bff; text-decoration: none;">Register here</a></p>

        </div>
    </div>
</body>
</html>
