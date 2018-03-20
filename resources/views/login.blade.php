
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>login page</title>
  <!-- Bootstrap core CSS-->
  <link href="{{URL::asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{URL::asset('/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="{{URL::asset('/css/sb-admin.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{URL::asset('/https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css')}}">

<!-- jQuery library -->
<script src="{{URL::asset('/https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>

<!-- Popper JS -->
<script src="{{URL::asset('/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js')}}"></script>

<!-- Latest compiled JavaScript -->
<script src="{{URL::asset('/https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js')}}"></script>
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="/login-verification" method="post">
          <div class="form-group">
            <label for="csrf">Email address</label>
            <input type="hidden" id="csrf" name="_token" placeholder="" value="{{ csrf_token() }}" >
            <input class="form-control" id="exampleInputEmail1" type="email" name="gmail" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" name="password" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" >Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="{{URL::asset('/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{URL::asset('/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
