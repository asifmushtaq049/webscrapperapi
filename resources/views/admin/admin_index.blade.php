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
        <a class="card-footer text-white clearfix small z-1" href="{{URL::asset('/dashboard/viewprofile')}}">
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
            <i class="fa fa-fw fa-cog fa-spin"></i>
          </div>
          <div class="mr-5 h5">Get API</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{URL::asset('/dashboard/getapi')}}">
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
            <i class="fa fa-fw fa-book"></i>
          </div>
          <div class="mr-5 h5">User Guide</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{URL::asset('/dashboard/usermanual')}}">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>

  </div>
  <!-- Area Chart Example-->
  <!-- <style type="text/css">
    img {
            height: 650px;
            background-position: center;
            background-size: cover;
           }
  </style>
   <div id="banner">
<div class="inline-block">
    <img src ="{{URL::asset('../img/one.jpg')}}">
</div>

<div class="inline-block">
    <img src ="{{URL::asset('../img/two.png')}}">
</div>

<div class="inline-block">
    <img src ="{{URL::asset('../img/three.png')}}">
</div>
</div> -->
  <!-- <div class="card mb-3">
    <div class="card-header">
      <img src="{{URL::asset('../img/one.jpg')}}">
      <img src="{{URL::asset('../img/two.png')}}">
      <img src="{{URL::asset('../img/three.png')}}">
      <!-- <i class="fa fa-area-chart"></i> Area Chart Example</div>
    <div class="card-body">
      <canvas id="myAreaChart" width="100%" height="30"></canvas>
    </div> -->

  </div> -->

</div>
@include("admin.admin_footer")
