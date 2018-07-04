@include("admin.admin_header")

<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{URL::asset('/admin/')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Profile / View Profile</li>
      </ol>
      <div >
      	<form>
      		<div class="">
		          <div>
		          	<label><b>My Profile </b></label>
		          </div>
		          <div class="  table-hover table-responsive">
			          <table class="table table-sm table-striped" >
				          	<tr>
				          		<th>ID</th>
				          		<td>{{$user->id}}</td>
				          	</tr>
				          	<tr>
				          		<th>Name</th>
				          		<td>{{$user->name}}</td>
				          	</tr>
				          	<tr>
				          		<th>Email</th>
				          		<td>{{$user->email}}</td>
				          	</tr>
				          	<tr>
				          		<th>Status</th>
				          		<td>{{$user->status}}</td>
				          	</tr>
			          </table>
			        </div>
		        </div>
        </form>
      </div>
</div>

@include("admin.admin_footer")
