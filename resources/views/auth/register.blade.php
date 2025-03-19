<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Halaman Registrasi">
    <meta name="author" content="AdminKit">
    <title>Register</title>

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
                        <h1 class="h2">Buat Akun</h1>
                        <p class="lead">Silakan daftar untuk mengakses sistem</p>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <!-- Nama Lengkap -->
                                    <div class="mb-3">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input id="name" class="form-control form-control-lg" type="text"
                                            name="name" value="{{ old('name') }}" required autofocus
                                            autocomplete="name" placeholder="Masukkan nama lengkap Anda" />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>

                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input id="email" class="form-control form-control-lg" type="email"
                                            name="email" value="{{ old('email') }}" required autocomplete="username"
                                            placeholder="Masukkan email Anda" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input id="password" class="form-control form-control-lg" type="password"
                                            name="password" required autocomplete="new-password"
                                            placeholder="Buat password" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <!-- Konfirmasi Password -->
                                    <div class="mb-3">
                                        <label class="form-label">Konfirmasi Password</label>
                                        <input id="password_confirmation" class="form-control form-control-lg"
                                            type="password" name="password_confirmation" required
                                            autocomplete="new-password" placeholder="Ulangi password" />
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>

                                    <!-- Tombol Register -->
                                    <div class="d-grid gap-2 mt-3">
                                        <button type="submit" class="btn btn-lg btn-primary">Daftar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Link ke Login -->
                    <div class="text-center mt-3">
                        <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- AdminKit JS -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
