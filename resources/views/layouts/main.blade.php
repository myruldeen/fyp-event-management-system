<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FYP System</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style type="text/css">

        .brand-image {
            height: 25px;
        }
    </style>
</head>
<body>
<div class="banner">
    <div class="container">
        <h1 style="color: #fff">FYP System</h1>
        <p style="color: #fff">Welcome to FYP System</p>
    </div>

</div>


<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img alt="Brand" class="brand-image" src="http://esurvey.unisel.edu.my/eLecturer/admin/images/logo.png"/>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php"><i class="fa fa-sign-in"></i> Login</a></li>
                <li><a href="supervisor"><i class="fa fa-user"></i> SV</a></li>
            </ul>

        </div>
    </div>
</nav>

    @yield('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    $(window).scroll(function(){
        if ($(window).scrollTop() == 0) {
            $(".navbar").removeClass("fixed-top");
        } else {
            $(".navbar").addClass("fixed-top");
        }
    });
</script>
</body>
</html>