<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
</head>
<body class="bdy">
    <form action="{{ route('login_process') }}" method="post">
        {{ csrf_field() }}
        <div class="container d-flex justify-content-center">
            <div class="d-flex flex-column justify-content-between">
                <div class="card mt-3 p-5">
                    <div>
                        <p class="mb-1">Choose Your</p>
                        <h4 class="mb-5 text-white">Favourite wristwatch!</h4>
                    </div> 
                    <a class="btn btn-danger" href="{{ url('/register') }}" role="button"><small>Don't have an account ? </small><span>Sign Up</span></a>
                </div>
                <div class="card two bg-white px-5 py-4 mb-3">
                    <div class="form-group"><input type="text" class="form-control" name="name" required><label class="form-control-placeholder" for="mail">Nama</label></div>

                    <div class="form-group"><input type="password" name="password" class="form-control" required><label class="form-control-placeholder" for="name">Password</label></div>

                    <button class="btn btn-danger btn-block btn-lg mt-1 mb-2" type="submit"><span>SIGN IN<i class="fas fa-long-arrow-alt-right ml-2"></i></span></button>
                </div>
            </div>
        </div>
    </form>
    
</body>
</html>