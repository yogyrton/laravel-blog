<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title>@yield('title')</title>

<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="../../assets/markmedia/images/favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon" href="../../assets/markmedia/images/apple-touch-icon.png">

<!-- Design fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="../../assets/markmedia/css/bootstrap.css" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="../../assets/markmedia/css/font-awesome.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../../assets/markmedia/style.css" rel="stylesheet">

<!-- Animate styles for this template -->
<link href="../../assets/markmedia/css/animate.css" rel="stylesheet">

<!-- Responsive styles for this template -->
<link href="../../assets/markmedia/css/responsive.css" rel="stylesheet">

<!-- Colors for this template -->
<link href="../../assets/markmedia/css/colors.css" rel="stylesheet">

<!-- Version Marketing CSS for this template -->
<link href="../../assets/markmedia/css/version/marketing.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>


<div id="wrapper">
    <header class="market-header header">
        <div class="container-fluid">
            <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="marketing-index.html"><img src="images/version/market-logo.png"
                                                                         alt=""></a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Статьи</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Категории</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">О нас</a>
                        </li>

                        @if (\Illuminate\Support\Facades\Auth::check())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}">Выйти</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login.create') }}">Войти</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register.create') }}">Регистрация</a>
                            </li>
                        @endif

                    </ul>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="text" placeholder="Чем могу помочь?">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
                    </form>
                </div>
            </nav>
        </div><!-- end container-fluid -->
    </header><!-- end market-header -->


@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@yield('content')


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <br>
                    <br>
                    <div class="copyright">&copy; Markedia. Design: <a href="http://html.design">HTML Design</a>.</div>
                </div>
            </div>
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="dmtop">Scroll to Top</div>

</div><!-- end wrapper -->

<!-- Core JavaScript
================================================== -->
<script src="../../assets/markmedia/js/jquery.min.js"></script>
<script src="../../assets/markmedia/js/tether.min.js"></script>
<script src="../../assets/markmedia/js/bootstrap.min.js"></script>
<script src="../../assets/markmedia/js/animate.js"></script>
<script src="../../assets/markmedia/js/custom.js"></script>

</body>
</html>


