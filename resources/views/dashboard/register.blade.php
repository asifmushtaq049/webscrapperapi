@include('dashboard.admin_header')
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form action="/register-verification" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name" required>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email" required>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="password1">Password</label>
                <input class="form-control" id="password" type="password" placeholder="Password"  required>
              </div>
              <div class="col-md-6">
                <label for="password2">Confirm password</label>
                <input class="form-control" id="confirm_password" type="password" placeholder="Confirm password"  required>

              </div>
              
            </div>
          </div>
          <button class="btn btn-primary btn-block">Register</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="{{url('/dashboard/login')}}">Login</a>
          <a class="d-block small" href="{{url('/dashboard/forgot-password')}}">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    
    var password = document.getElementById("password")
    , confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
      if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
      } else {
        confirm_password.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;

</script>
  @include('dashboard.admin_footer')