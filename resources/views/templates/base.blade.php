<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
</head>
<body class="body-move-off">

    <nav class="nav-bar">
        <div class="hamburger">
            <button id="hamburger" class="hamb-on-off"><p class="text-white">&#9776;</p></button>
            <button id="hamburger-close" class="hamb-on-off hamb-close"><p class="text-white">&#10005;</p></button>
        </div>
        <div class="logo text-white">
            <h1 class="d-inline-block">DataBarang</h1>
            <img src="img/user.png" class="d-inline-block rounded-circle ml-4 mb-1" alt="" width="30" height="30">
            <div class="btn-group d-inline-block">
                <button type="button" class="btn btn-dropdown btn-sm dropdown-toggle text-white dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#">My Profile</a>
                  <a class="dropdown-item" href="#">Change Password</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Logout</a>
                </div>
            </div>
        </div>
    </nav>
   
    <div class="drawer hide-drawer" id="drawer">
        <ul>
            <li class="sub-logo text-white"><h1>DataBarang</h1></li>
            <li class="list-item"><a href="/home" class="text-white"><i class="fas fa-home"></i> &nbsp;&nbsp;&nbsp;Home</a></li>
            <li class="list-item"><a href="/data" class="text-white"><i class="fas fa-plus"></i> &nbsp;&nbsp;&nbsp;Data Barang</a></li>
            <li class="list-item"><a href="/about" class="text-white"><i class="fas fa-info-circle"></i> &nbsp;&nbsp;&nbsp;About</a></li>
        </ul>
    </div>
    
    <div class="container">
        <div class="content">
            @yield('content')
        </div>
    </div>

    <footer>
        <p class="text-white">Copyright 2020 &copy; DataBarang</p>
    </footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
    
</body>
</html>