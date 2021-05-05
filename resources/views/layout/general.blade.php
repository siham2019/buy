<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('css/general.css')}}">
    <title>buy it</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand px-2"><span class="buy">Buy</span> <span class="it">IT</span> </a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/"><i class="fa fa-home"></i> home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/login" tabindex="-1" aria-disabled="true"><i class="fa fa-user-o"></i> login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/register" tabindex="-1" aria-disabled="true"><i class="fa fa-user-circle-o"></i> register</a>
                </li>
                <li class="nav-item ml-4 ">
                    <a class="nav-link " href="/cart" tabindex="-1" aria-disabled="true"><span class="badge badge-danger">0</span><i class="fa fa-shopping-cart" style="font-size: 24px;"></i> </a>
                </li>
            </ul>
        </div>
    </nav>




    @yield('content')


    <div class="container mt-5">
         <div class="d-flex justify-content-between">
            <p>Made with <i class="fa fa-heart"></i>  by siham heddi</p>
            <p>follow me
                <span class="d-flex justify-content-between" style="font-size: 24px">
                    <a href="https://www.facebook.com"><i class="fa fa-facebook-official"></i></a>
                    <a href="https://www.twitter.com"><i class="fa fa-twitter-square"></i></a>
                    <a href="https://www.linkedin.com"><i class="fa fa-linkedin-square"></i></a>
                </span>
            </p>
         </div>
   </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>