<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    {{-- Bootstrapp 5.3 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('login/css/style.css') }}">
</head>

<body>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Dizimnen O`tiw</h2>
                        <form autocomplete="on" method="POST" class="register-form" action="{{ route('admin.store') }}" id="register-form">
                            @if (Session::get('success'))
                                <div class="alert alert-success">{{ Session::get('success') }}</div>
                            @endif
                            @if (Session::get('fail'))
                                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                            @endif
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" value="{{ old('name') }}" required name="name" id="name" placeholder="Atin`iz..." />
                                <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" value="{{ old('sur_name') }}" required name="sur_name" id="name" placeholder="Familiyan`iz..." />
                                <span class="text-danger">@error('sur_name') {{ $message }} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" value="{{ old('email') }}" required name="email" id="email" placeholder="Emailin`iz..." />
                                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" value="{{ old('password') }}" required name="password" id="pass" placeholder="Parol kiritin`" />
                                <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" value="{{ old('re_password') }}" required name="re_password" placeholder="Paroldi Qaytalan`" />
                                <span class="text-danger">@error('re_password') {{ $message }} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" value="{{ old('telephone') }}" required name="telephone" id="re_pass" placeholder="Telefon Nomerin`iz" />
                                <span class="text-danger">@error('telephone') {{ $message }} @enderror</span>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit"
                                    value="Dizimnen O`tiw" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ asset('login/images/signup-image.jpg') }}" alt="sing up image"></figure>
                        <div class="btn-group">
                            <a href="{{ route('user.register') }}" class="btn btn-primary active" aria-current="page">Paydalaniwshi</a>
                            <a href="#" class="btn btn-primary">Apteka Iyesi</a>
                            <a href="#" class="btn btn-primary">Apteka Satiwshisi</a>
                        </div>
                        <a href="{{ route('admin.login') }}" class="signup-image-link">Men Dizimnen O`tgenmen</a>
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
