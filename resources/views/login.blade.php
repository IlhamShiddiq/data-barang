<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Please Login</title>

    <link rel="shortcut icon" href="{{asset('/img/icon.jpg')}}">

    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
</head>
<body class="login-page">

    <div class="login-wrapper">
        <div class="logo-login text-center mb-5">
            <img src="img/user.png" class="rounded-circle" alt="" width="150" height="150">
        </div>
        <div class="login-box">
            @error('password')
                <div class="alert alert-danger alert-dismissible fade show text-center alert-error" role="alert">
                    {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
            @error('username')
                <div class="alert alert-danger alert-dismissible fade show text-center alert-error" role="alert">
                    {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
            <div class="title-login text-center">
                <h1 class="text-white mb-3">LOGIN</h1>
            </div>
            <form action="/login" method="POST" action="login">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" id="username" aria-label="Username">
                </div>
                <div class="pass-field">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" id="password" aria-label="Password">
                        <button type="button" id="show-passlogin"><i class="fas fa-eye"></i></button>
                    </div>
                </div>
                <div class="btn-submit mt-4">
                    <button type="submit" class="btn btn-primary submit-login">Log In now</button>
                </div>
            </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('/js/app.js')}}"></script>
    
</body>
</html>