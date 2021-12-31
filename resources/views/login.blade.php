<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login Measuring BTS</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('style/images/favicon.png') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
                                @if(session('error'))
                                <div class="alert alert-danger">
                                    <b>Opps!</b>{{session('error')}}
                                </div>
                                @endif
                                <form class="mt-5 mb-5 login-input" action="{{route('actionlogin') }}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <button type="submit" class="btn mb-1 btn-primary">Login <span class="btn-icon-right"><i class="fa fa-sign-in" aria-hidden="true"></i></span>
                                    </button>
                                </form>
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





