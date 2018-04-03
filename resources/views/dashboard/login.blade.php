@include('dashboard.admin_header');
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="/login-verification" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="hidden" id="csrf" name="_token" placeholder="" value="{{ csrf_token() }}" >
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="gmail" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" name="password" placeholder="Password" required>
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="{{url('/dashboard/register')}}">Register an Account</a>
          <a class="d-block small" href="{{url('/dashboard/forgot-password')}}">Forgot Password?</a>
        </div>
      </div>
    </div>
@include('dashboard.admin_footer');