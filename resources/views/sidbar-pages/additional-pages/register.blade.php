<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- site icon -->
        <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/png" />
        <!-- bootstrap css -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
        <!-- site css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        <!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
        <!-- color css -->
        <link rel="stylesheet" href="{{ asset('css/colors.css') }}" />
        <!-- select bootstrap -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}" />
        <!-- scrollbar css -->
        <link rel="stylesheet" href="{{ asset('css/perfect-scrollbar.css') }}" />
        <!-- custom css -->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />



        {{--  <!--[if lt IE 9]>  --}}
        {{--  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  --}}
        {{--  <![endif]-->  --}}
    </head>
    <div class="full_container">
        <div class="container">
            <div class="center verticle_center full_height">
                <div class="login_section">
                    <div class="logo_login">
                        <div class="center">
                            <a href="{{ route('index') }}" >><img width="210" src="images/logo/logo.png" alt="#"></a>
                        </div>
                    </div>
                    <div class="login_form">
                        <form action="{{ route('signup') }}" method="POST">
                            @csrf
                            <fieldset>
                                <div class="field">
                                    <label class="label_field">Name</label>
                                    <input type="text" name="name" placeholder="Name" />
                                </div>
                                <div class="field">
                                    <label class="label_field">Email Address</label>
                                    <input type="email" name="email" placeholder="E-mail" />
                                </div>
                                <div class="field">
                                    <label class="label_field">Phone</label>
                                    <input type="tel" name="phone" placeholder="Phone" />
                                </div>
                                <div class="field">
                                    <label class="label_field">Password</label>
                                    <input type="password" name="password" placeholder="Password" />
                                </div>
                                <div class="field">
                                    <label class="label_field hidden">hidden label</label>
                                    <label class="form-check-label"><input type="checkbox" class="form-check-input">
                                        Remember Me</label>
                                    <a class="forgot" href="">Forgotten Password?</a>
                                </div>
                                <div class="field margin_0">
                                    <label class="label_field hidden">hidden label</label>
                                    <button class="main_bt">Sign Up</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- wow animation -->
    <script src="{{ asset('js/animate.js') }}"></script>
    <!-- select country -->
    <script src="{{ asset('js/bootstrap-select.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <!-- chart js -->
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/Chart.js') }} "></script>
    <script src="{{ asset('js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('js/utils.js') }}"></script>
    <script src="{{ asset('js/analyser.js') }}"></script>
    <!-- nice scrollbar -->
    <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- custom js -->

    <script src="{{ asset('js/chart_custom_style1.js') }}"></script>
    <script src="{{ asset('js/chart_custom_style2.js') }}"></script>

    </body>

</html>
