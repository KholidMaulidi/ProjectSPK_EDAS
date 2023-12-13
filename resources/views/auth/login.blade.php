<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            background: linear-gradient(135deg, #e6ddac, #f38cbf, #99d1f4, #96bfc0);
            background-size: 400% 400%;
            animation: gradient 5s infinite;
            /* background: #f2bcbc; */
        }

        .body-style {
            margin-top: 50px;
        }

        .card-primary {
            border: 0px solid #ffffff00;
            border-radius: 0px;
            box-shadow: 0px 0px 10px 0px #ffffff00;
            height: 110%;
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.3);
        }

        .login-brand {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-brand img {
            max-width: 100%;
            height: auto;
            border-radius: 100%;
        }

        .card-header {
            /* background: linear-gradient(50deg, #FFA732, #C88EA7); */
            background: #ffffff;
            color: #fff;
            text-align: center;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            margin-top: 10px;
        }

        .login-text {
            margin-top: 15px;
            text-align: center;
            color: #000000;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 1.5rem;

        }

        .text-small {
            font-size: 0.9rem;
            color: #C88EA7
        }

        .btn-primary {
            background: linear-gradient(50deg, #FFA732, #C88EA7);
            border: 1px solid #C88EA7;
            margin-bottom: 0px;
        }

        .btn-primary:hover {
            /* background: linear-gradient(50deg, #FFA732, #C88EA7); */
            background: #bc7bc0;
            border: 1px solid #C88EA7;
        }

        .text-muted a {
            margin-top: 0px;
            color: #C88EA7;
        }

        .text-muted a:hover {
            text-decoration: underline;
        }

        .welcome-container {
            /* background: linear-gradient(50deg, #C88EA7, #FFA732); */
            background: #ffffff;
            padding: 20px;
            text-align: center;
            height: 110%;
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.3);
            opacity: 5;
        }

        .text-center-edas {
            color: #000000;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 1.5rem;
        }

        .text-center {
            color: #000000;


        }


        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>

<body>
    <div id="app" class="body body-style">
        <section class="section">
            <div class="login-brand">
                <img src="../assets/images/logos/logo.jpeg" alt="logo" width="100" class="img">
            </div>
            <div class="container mt-5">
                <div class="row no-gutters justify-content-center">
                    <div class="col-md-4">
                        <!-- First Column: Login Form -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="login-text">Login to Your Account</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}" class="needs-validation"
                                    novalidate="">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            tabindex="1" autofocus>
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <div class="float-right">
                                                <a href="{{ route('password.request') }}" class="text-small">
                                                    Forgot Password?
                                                </a>
                                            </div>
                                        </div>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            tabindex="2">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block"
                                            tabindex="4">Login
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="text-muted text-center pb-3">
                                Don't have an account? <a href="{{ route('register') }}">Create One</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Second Column: Welcome Message -->
                        <div class="welcome-container">
                            <img src="{{ asset('assets/images/logos/tema.png') }}" alt="Welcome Image"
                                style="max-width: 80%; height: auto;">
                            <div>
                                <h3 class="text-center-edas">Welcome to EDAS</h3>
                                <p class="text-center fst-italic">Sistem Pendukung Keputusan
                                    EDAS: Panduan Intelektual Menuju Keputusan Optimal, Meningkatkan Kualitas Setiap
                                    Keputusan Anda.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraries -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
</body>

</html>
