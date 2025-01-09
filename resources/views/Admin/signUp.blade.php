<!DOCTYPE html>
<html lang="en">
<head>
    <title>GURU Able - Free Lite Admin Template </title>
    <!-- Other meta tags and stylesheets -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="fix-menu">
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="signup-card card-block auth-body mr-auto ml-auto">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="text-center">
                                <img src="assets/images/auth/logo-dark.png" alt="logo.png">
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up. It is fast and easy.</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="input-group">
                                    <input type="text" name="name" class="form-control" placeholder="Choose Username" required>
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email Address" required>
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" placeholder="Choose Password" required>
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now.</button>
                                    </div>
                                </div>
                                <hr/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <script>
        // Check if there are any success or error messages in the session
        @if (session('success'))
            swal({
                title: "Success!",
                text: "{{ session('success') }}",
                icon: "success",
                button: "OK",
            });
        @endif

        @if (session('error'))
            swal({
                title: "Error!",
                text: "{{ session('error') }}",
                icon: "error",
                button: "OK",
            });
        @endif
    </script>
</body>
</html>
