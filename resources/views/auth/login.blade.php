@extends('auth.layouts.master')

@section('title','Login')

@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>

  body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 390px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}

</style>

<body class="text-center">
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{route('login')}}" method="post">
                          @csrf
                           <img class="mb-4" src="https://image.flaticon.com/icons/png/512/24/24806.png" alt="" width="72" height="72">
                            <h3 class="text-center text-info">Логін</h3>
                            <div class="form-group">
                                 <label for="email" class="text-info">Email:</label><br>
                                <input type="email" name="email" placeholder = "username@gmail.com" id="email" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Пароль:</label><br>
                                <input type="password" name="password" placeholder = "*******" id="password" class="form-control" required="">
                            </div>
                            <div  class="form-group">
                                  <input type="submit" name="submit" class="btn btn-info btn-md" value="Увійти" required="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection
