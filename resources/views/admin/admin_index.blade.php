@include("admin.admin_header")
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{URL::asset('/dashboard/')}}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">My Dashboard</li>
  </ol>
  <!-- Icon Cards-->
  <div class="row">
    <div class="col-xl-4 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-user"></i>
          </div>
          <div class="mr-5 h5">My Profile</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{URL::asset('/admin/view_admin_profile')}}">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>

    <div class="col-xl-4 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-cog"></i>
          </div>
          <div class="mr-5 h5">Our Services</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{URL::asset('/admin/provided_websites')}}">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>

    
    
    <div class="col-xl-4 col-sm-6 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-user-plus"></i>
          </div>
          <div class="mr-5 h5">All Users</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{URL::asset('/admin/users')}}">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>

  </div>

  </div>


    <div style="padding:20px;">
        <img src ="{{URL::asset('../img/admin.png')}}">

        <img src ="{{URL::asset('../img/admin2.jpg')}}">
    </div>


</div>

</div>

@include("admin.admin_footer")
