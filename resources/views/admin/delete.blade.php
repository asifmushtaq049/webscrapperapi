@include("admin.admin_header")
<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{URL::asset('/admin/')}}">Dashboard</a>
        </li>
        <!-- <li class="breadcrumb-item active">Profile / Edit Profile</li> -->
      </ol>
      <div >
      	        
		<label><b>Delete User</b></label>
		 <br>
		<button class="btn btn-primary">Delete User</button>
      </div> 
</div>
@include("admin.admin_footer")