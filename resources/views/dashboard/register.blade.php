
@include('dashboard.admin_header')
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form action="/register-verification" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input type="hidden" id="csrf" name="_token" placeholder="" value="{{ csrf_token() }}" >
                <input class="form-control" id="exampleInputName" name="fname" type="text" aria-describedby="nameHelp" placeholder="Enter first name" required>
                <!-- @if($errors->has('fname')) <p> {{$errors->first('fname')}} </p> @endif -->
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" id="exampleInputLastName" name="lname" type="text" aria-describedby="nameHelp" placeholder="Enter last name" required>
                 <!-- @if($errors->has('lname')) <p> {{$errors->first('lname')}} </p> @endif -->
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email" required>
             <!-- @if($errors->has('email')) <p> {{$errors->first('email')}} </p> @endif -->
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="password1">Password</label>
                <input class="form-control" id="password" name="password" type="password" placeholder="Password"  required>
                 <!-- @if($errors->has('password')) <p> {{$errors->first('password')}} </p> @endif -->
              </div>
              <div class="col-md-6">
                <label for="password2">Confirm password</label>
                <input class="form-control" name="cpassword" id="confirm_password" type="password" placeholder="Confirm password"  required>
                 <!-- @if($errors->has('cpassword')) <p> {{$errors->first('cpassword')}} </p> @endif -->
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