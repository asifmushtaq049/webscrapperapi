@include("dashboard.header")
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">API / Get API</li>
      </ol>
      <div >
      	<form>
      		<div class="">
	      		<div class="form-group ">
	      			<label for="domain1"><b>Your Domain*</b></label>
	      			<select class="form-control col-md-6" id="domain1">
	      				<option>www.climesoft.com</option>
	      				<option>www.noorrehman.tk</option>
	      				<option>www.voa.org</option>
	      			</select>
	      		</div>
	      		<div class="form-group">
	      			<label for="website1"><b>Target Website*</b></label>
	      			<select class="form-control col-md-6" id="website1">
	      				<option>www.daraz.pk</option>
	      				<option>www.amazon.com</option>
	      				<option>www.tme.com</option>
	      			</select>
	      		</div>
	      		<div>
	      			<label><b>Type of Data*</b></label><br>
		      		<label class="checkbox">
		      			<input type="checkbox" name="catagory" value="catagory">
		      			Catagory
		      		</label>
		      		<br>
		      		<label class="checkbox">
		      			<input type="checkbox" name="products" value="products">
		      			Products
		      		</label>
		      	</div>
		      	<div>
	      			<label><b>Type of Format*</b></label><br>
		      		<label>
		      			<input type="radio" name="format" value="json">
		      			JSON
		      		</label><br>
		      		<label>
		      			<input type="radio" name="format" value="xml">
		      			XML
		      		</label>
		      	</div>
	      		<div>
	      			<button class="btn btn-success">Get file</button>
	      			<button class="btn btn-primary">Get API</button>
	      		</div>
	      	</div>
      	</form>
      	
      </div>
      
    </div>
	@include("dashboard.footer")
