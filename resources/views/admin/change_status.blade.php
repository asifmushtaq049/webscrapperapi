@include("admin.admin_header")
<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{URL::asset('/admin/')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Change_status</li>
      </ol>
      <div>
        <form method="POST">
          {{ csrf_field() }}
          <div>
              <label><b>Enter New Status</b></label>
              <br>
              <input value="{{$user->status}}" type="number" name="status" min="0" max="1" required>
              <button type="submit" class="btn btn-primary btn-sm">Change</button>
          </div>
          </form>
          <a href="{{URL::asset('/admin/users')}}">Go Back</a>  
      </div>
      
    </div>
@include("admin.admin_footer")