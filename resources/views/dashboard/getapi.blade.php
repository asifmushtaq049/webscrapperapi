@include("dashboard.header")
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{URL::asset('/dashboard/')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">API / Get API</li>
      </ol>
      <div >
      	<form action="/dashboard/getapi/data" method="POST" target="_blank">
      		<div class="">
      			@csrf
	      		
	      		<div class="form-group">
	      			<label for="website1"><b>Target Website*</b></label>
	      			<select class="form-control col-md-6" name="web" id="website1" required>
	      				<option value="">Select Website</option>
	      				<option>www.amazon.com</option>
	      				<option>www.tme.com</option>
	      				<option>www.alibaba.com</option>
	      				

	      			</select>
	      		</div>
	      		<div>
	      			<label><b>Type of Data*</b></label><br>
		      		<label class="checkbox">
		      			<input type="radio" name="type" value="category" required="required">
		      			Catagory
		      		</label>
		      		<br>
		      		<label class="checkbox">
		      			<input type="radio" name="type" value="products" required="required">
		      			Products
		      		</label>
		      	</div>
		      	<div>
	      			<label><b>Type of Format*</b></label><br>
		      		<label>
		      			<input type="radio" name="format" value="json" required="">
		      			JSON
		      		</label><br>
		      		<label>
		      			<input type="radio" name="format" value="xml" required="">
		      			XML
		      		</label>
		      	</div>
	      		<div>
	      			
	      			<button class="btn btn-success">Get API</button>
	      			<button class="btn btn-primary" name="download"><i class="fa fa-download" aria-hidden="true"></i></i>Download File</button>
	      		</div>
	      	</div>
      	</form>
      	
      </div>
      
    </div>
	@include("dashboard.footer")
