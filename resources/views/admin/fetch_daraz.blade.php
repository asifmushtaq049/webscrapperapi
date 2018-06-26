@include("admin.admin_header")
<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{URL::asset('/admin/')}}">Dashboard</a>
        </li>
        <!-- <li class="breadcrumb-item active">API/Get API</li> -->
      </ol>
      <div >
      	<form>
      		<div class="">
	      		
	      		<!-- <div class="form-group">
	      			<label for="website1"><b>Target Website*</b></label>
	      			<select class="form-control col-md-6" id="website1">
	      				<option>www.daraz.pk</option>
	      				<option>www.amazon.com</option>
	      				<option>www.tme.com</option>
	      			</select>
	      		</div> -->
	      		<div class="d-flex justify-content-center display-1 bg-info" >
			          <label><b>Scrap daraz.pk</b></label>	      			
	      		</div>
	      		<!-- <div>
	      			<label><b>Type of Data</b></label><br>
		      		<label class="checkbox">
		      			<input type="checkbox" name="catagory" value="catagory">
		      			Catagory
		      		</label>
		      		<br>
		      		<label class="checkbox">
		      			<input type="checkbox" name="products" value="products">
		      			Products
		      		</label>
		      	</div> -->
		      	<div>
	      			<label><b>Type of Data</b></label><br>
		      		<label>
		      			<input type="radio" name="format" value="categories">
		      			Categories
		      		</label><br>
		      		<label>
		      			<input type="radio" name="format" value="products">
		      			Products
		      		</label>
		      	</div>
	      		<div>
	      			
	      			<button class="btn btn-primary btn-lg">Scrap</button>
	      		</div>
	      	</div>
      	</form>
      	
      </div>
      
    </div>
@include("admin.admin_footer")