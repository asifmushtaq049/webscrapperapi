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
      	<form action="/dashboard/data" method="POST" target="_blank">
      		<div class="">
      			@csrf
	      		
	      		<div class="form-group">
	      			<label for="website1"><h4>Target Website</h4></label>
	      			<select class="form-control col-md-4" name="web" id="website1" required>
	      				<option value="">Select Website</option>
	      				@foreach($data as $d)
		      				<option>{{$d->website}}</option>
		      			@endforeach
	      			</select>
	      		</div>
	      		<div>
	      			<label><h4>Type of Data</h4></label><br>
		      		<label class="checkbox">
		      			<input type="radio" name="type" value="category" required="required">
		      			<b>Category</b>
		      		</label>
		      		<br>
		      		<label class="checkbox">
		      			<input type="radio" name="type" value="products" required="required">
		      			<b>Products</b>
		      		</label>
		      	</div>
		      	<div>
	      			<label><h4>Type of Format</h4></label><br>
		      		<label>
		      			<input type="radio" name="format" value="json" required="">
		      			<b>JSON</b>
		      		</label><br>
		      		<label>
		      			<input type="radio" name="format" value="xml" required="">
		      			<b>XML</b>
		      		</label>
		      	</div>
	      		<div>
	      			
	      			<button class="btn btn-success"><i class="fa fa-cog"></i> Get API</button>
	      			<button class="btn btn-primary" name="download"><i class="fa fa-download" aria-hidden="true"></i></i> Download File</button>
	      		</div>
	      	</div>
      	</form>
      	
      </div>
      
    </div>
	@include("dashboard.footer")
