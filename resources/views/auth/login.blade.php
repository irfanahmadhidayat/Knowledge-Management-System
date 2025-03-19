<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Login ke sistem">
    <meta name="author" content="AdminKit">
    <title>Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/icons/icon-48x48.png') }}" />

    <!-- AdminKit CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100 justify-content-center align-items-center">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5">
                    <div class="text-center mt-4">
                        <h1 class="h2">Selamat Datang!</h1>
                        <p class="lead">Silakan login untuk melanjutkan</p>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <div class="m-sm-4">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <!-- Email Address -->
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input id="email" class="form-control form-control-lg" type="email"
                                            name="email" value="{{ old('email') }}" required autofocus
                                            autocomplete="username" placeholder="Masukkan email Anda" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input id="password" class="form-control form-control-lg" type="password"
                                            name="password" required autocomplete="current-password"
                                            placeholder="Masukkan password Anda" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <!-- Remember Me -->
                                    <div class="form-check align-items-center">
                                        <input id="remember_me" type="checkbox" class="form-check-input"
                                            name="remember">
                                        <label class="form-check-label text-small" for="remember_me">Ingat saya</label>
                                    </div>

                                    <!-- Login Button -->
                                    <div class="d-grid gap-2 mt-3">
                                        <button type="submit" class="btn btn-lg btn-primary">Masuk</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Register & Forgot Password -->
                    <div class="text-center mt-3">
                        @if (Route::has('register'))
                            <p>Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
                        @endif

                        @if (Route::has('password.request'))
                            <p><a href="{{ route('password.request') }}">Lupa password?</a></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- AdminKit JS -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
