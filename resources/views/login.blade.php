<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login Measuring BTS</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('style/images/favicon.png') }}">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link  rel="stylesheet" href="{{ asset('style/css/style.css') }}">
    
    
</head>

<body class="h-100">
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <center><img src="{{ asset('style/images/favicon.png') }}" height="150" width="150" alt=""></center><br>
                                {{-- <a class="text-center" href="index.html"> <h4>MEASUREMENT BTS</h4></a> --}}
        
                                <form class="mt-5 mb-5 login-input">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                    {{-- <button class="btn login-form__btn submit w-100" >
                                        --}}
                                   
                                       <a href="{{url('home')}}"><button class="btn btn-primary">Login</button></a>
                                   
                                </form>
                                <p class="mt-5 login-form__footer">Dont have account? <a href="page-register.html" class="text-primary">Sign Up</a> now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{asset('style/plugins/common/common.min.js')}}"></script>
    <script src="{{asset('style/js/custom.min.js')}}"></script>
    <script src="{{asset('style/js/settings.js')}}"></script>
    <script src="{{asset('style/js/gleek.js')}}"></script>
    <script src="{{asset('style/js/styleSwitcher.js')}}"></script>
</body>
</html>





