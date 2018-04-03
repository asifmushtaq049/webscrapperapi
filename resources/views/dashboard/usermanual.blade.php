@include("dashboard.header")

<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{URL::asset('/dashboard/')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">API / User Manual</li>
      </ol>
      <div class="container-fluid">
      	<div class="jumbotron">
          <h3>How to use our API</h3>
      	</div>
      </div> 
</div>

@include("dashboard.footer")