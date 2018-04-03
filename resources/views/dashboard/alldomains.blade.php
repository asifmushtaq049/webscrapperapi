@include("dashboard.header")

<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{URL::asset('/dashboard/')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Domains / All Domains</li>
      </ol>
      <div class="table-responsive">
	      	<table class="table table-bordered table-hover table-condensed">
	      		<tr>
	      			<th>ID</th>
	      			<th>Domain</th>
	      			<th>View</th>
	      			<th>Delete</th>	
	      		</tr>
	      		<tr>
	      			<td>1</td>
	      			<td>www.facebook.com</td>
	      			<td><a href="#">view</a></td>
	      			<td><a href="#">delete</a></td>
	      		</tr>
	      		<tr>
	      			<td>2</td>
	      			<td>www.youtube.com</td>
	      			<td><a href="#">view</a></td>
	      			<td><a href="#">delete</a></td>
	      		</tr>
	      		<tr>
	      			<td>3</td>
	      			<td>www.climesoft.com</td>
	      			<td><a href="#">view</a></td>
	      			<td><a href="#">delete</a></td>
	      		</tr>

	<!--       	<?php
	      	// select * from database;
	      	// while(hasdata){
	      	?>
	      		<tr>
	      			<td><?php //echo $row['name'];?></td>
	      			<td><a href="<?php //echo $row['name'];?>">Open</a></td>
	      		</tr>

	      	<?php //} ?> -->

	      	</table>
      </div> 
</div>

@include("dashboard.footer")