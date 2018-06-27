@include("admin.admin_header")
<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{URL::asset('/admin/')}}">Dashboard</a>
        </li>
      </ol>
      <div >
      	<form>
      		<div class="">
	      		
		          <div>
		          	<label><b>Change Status</b></label>
		          </div>
		          <div class="  table-hover table-responsive">
			          <table class="table" >
			          	<thead class="thead-dark">
				          	<tr>
				          		<th>NAME</th>
				          		<th>Email</th>
				          		<th>Status</th>
				          		<th>Delete User</th>
				          		<th>Change Status</th>
				          	</tr>
			          	</thead>
			          	 
			          	@foreach ($users as $user)
							<tr>
				          		<td>{{$user->name}}</td>
				          		<td>{{$user->email}}</td>
				          		<td>{{$user->status}}</td>
				          		<td><a href="{{URL::asset('/admin/delete')}}/{{$user->id}}">Delete User</a></td>
			      				<td><a href="{{URL::asset('/admin/change_status')}}/{{$user->id}}">Change Status</a></td>
				          	</tr>
						@endforeach
			          </table>
			        </div>
		         
		        </div>
		    </div>
        </form>
      	
      </div> 
</div>
@include("admin.admin_footer")