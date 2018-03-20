@include("dashboard.header")

<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Profile / Edit Profile</li>
      </ol>
      <div >
      	<form>
      		<div class="row">
	      		<div class="col-md-6 ">
		          <div  class="form-group">
		          	<label for="fname1"><b>First Name*</b></label>
		          	<input type="text" id="fname1" name="fname" placeholder="" class="form-control">
		          </div>
		          <div class="form-group">
		          	<label for="lname1"><b>last Name*</b></label>
		          	<input type="text" id="lname1" name="lname" placeholder="" class="form-control">
		          </div>
		          <div class="form-group">
		          	<label for="email1"><b>Email*</b></label>
		          	<input type="email" id="email1" name="email" placeholder="" class="form-control">
		          </div>
		          <div class="form-group">
		          	<label for="password1"><b>Password*</b></label>
		          	<input type="password" id="password1" name="password" placeholder="" class="form-control">
		          </div>
		          <div class="form-group">
		          	<label for="cpassword1"><b>Confirm Password*</b></label>
		          	<input type="password" id="cpassword1" name="cpassword" placeholder="" class="form-control">
		          </div>
		          <div>
		          	<button class="btn btn-primary">Update</button>
		          </div>
		        </div>
		    </div>
        </form>
      	
      </div> 
</div>

@include("dashboard.footer")