<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('browsertitle')
    </title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/style.css">
    @yield('css')


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

@include('topnav')

@yield('outsidecontainer')

<div class="container-fluid">
    <div class="row">
        @include('errormessage')
    </div>

    @yield('content')

    <div class="row footer-background">
        <div class="col-md-3">

           <div class="padding-left-8px">
            <h4>Contact US</h4>
            123 Main Street<br>
            UnionVillle, PA<br>
            75645 <br>
            +1 234 34434 34
           </div>
        </div>
        <div class="col-md-6"></div>
        <div class="col-md-3"><img src="/assets/map-small.png" class="pull-right" alt=""></div>

    </div>

</div>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

@yield('bottomjs')
</body>
</html>