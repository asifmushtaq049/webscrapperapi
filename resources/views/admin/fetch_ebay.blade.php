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
	      		<div class="d-flex justify-content-center display-1 bg-info" >
			          <label><b>Scrap ebay.com</b></label>	      			
	      		</div>
	      		<br>
	      		<br>
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
		      	<br>
	      		<br>
	      		<br>
	      		<div>
	      			
	      			<button class="btn btn-primary btn-lg">Scrap</button>
	      		</div>
	      	</div>
      	</form>
      	
      </div>
      
    </div>
@include("admin.admin_footer")