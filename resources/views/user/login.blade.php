<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin sipantinda sistemag`a kiriw!</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('login/css/style.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{ asset('login/images/signin-image.jpg') }}" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">Akkaunt Jaratiw!</a>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Platformag`a Kiriw</h2>
                        <form method="POST" action="{{ route('user.check') }}" class="register-form" id="login-form">
                            @if (Session::get('success'))
                                <div class="alert alert-success">{{ Session::get('success') }}</div>
                            @endif
                            @if (Session::get('fail'))
                                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                            @endif
                            @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input value="{{ old('name') }}" type="text" name="email" id="your_name"
                                    placeholder="Pochtan`izdi kiritin`..." />
                                <span class="text-danger">
                                    @error('email')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" value="{{ old('password') }}" name="password" id="your_pass" placeholder="Parol..." />
                                <span class="text-danger">
                                    @error('password')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Kiriw" />
                            </div>
                        </form>
                        <div class="social-login">
                            <div class="btn-group">
                                <a href="{{ route('admin.login') }}" class="btn btn-primary active" aria-current="page">Admin</a>
                                <a href="#" class="btn btn-primary">Apteka Iyesi</a>
                                <a href="#" class="btn btn-primary">Apteka Satiwshisi</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset('login/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('login/js/main.js') }}"></script>
</body>

</html>
