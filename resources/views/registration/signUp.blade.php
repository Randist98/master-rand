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
            <form action="{{ route('sign-up') }}" method="post" enctype="multipart/form-data" id="signup-form" >
                {!! csrf_field() !!}
                <h2>Please Sign Up</h2>
            <div class="social-container">
                <a href="#" class="social1"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social2"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social3"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <input type="text" name="name" placeholder="Name" style="width: 100%; padding: 10px; margin-bottom: 10px;" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}">
            @if ($errors->has('name'))
                <span class="invalid-feedback name-error">
                    <strong id="color1">{{ $errors->first('name') }}</strong>
                </span>
            @endif
            <strong id="color1"><span id="name-error"></span></strong> <!-- Add the error message element -->

            <input type="email" name="email1" placeholder="Email" style="width: 100%; padding: 10px; margin-bottom: 10px;" class="form-control{{ $errors->has('email1') ? ' is-invalid' : '' }}" value="{{ old('email1') }}">
            @if ($errors->has('email1'))
                <span class="invalid-feedback email-error">
                    <strong id="color1">{{ $errors->first('email1') }}</strong>
                </span>
            @endif
            <strong id="color1"><span id="email-error-sign" ></span></strong> <!-- Add the error message element -->

            <input type="password" name="password1" placeholder="Password" style="width: 100%; padding: 10px; margin-bottom: 10px;" class="form-control{{ $errors->has('password1') ? ' is-invalid' : '' }}">
            @if ($errors->has('password1'))
                <span class="invalid-feedback password-error">
                    <strong id="color1">{{ $errors->first('password1') }}</strong>
                </span>
            @endif
            <strong id="color1"><span id="password-error-sign" ></span></strong> <!-- Add the error message element -->

            <input type="password" name="password1_confirmation" placeholder="Confirm Password" style="width: 100%; padding: 10px; margin-bottom: 10px;">
            <strong id="color1"><span id="conf-password-error-sign"></span></strong> <!-- Add the error message element -->

            <button type="submit" style="background-color: rgb(89, 136, 107); color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px;">
                <span class="material-icons" style="vertical-align: middle;">login</span> Sign Up
            </button>
            <h2>&nbsp;</h2>
            </form>
            <p style="text-align: center; margin-top: -40px;">Already have an account? <a href="{{ route('login.index') }}" style="color: #007bff; text-decoration: none;">Login here</a></p>

        </div>
    </div>
</body>
</html>
