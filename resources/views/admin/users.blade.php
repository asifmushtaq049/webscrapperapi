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
      	<form>
      		<div class="">
	      		<!-- <div class="col-md-6 "> -->
		          <div>
		          	<label><b>Change Status</b></label>
		          </div>
		          <table>
		          	<tr>
		          		<td>NAME</td>
		          		<td>Status</td>
		          	</tr>
		          	 <!-- </div> -->
		          	@foreach ($users as $user)
						<tr>
			          		<td>{{$user->name}}</td>
			          		<td>{{$user->status}}</td>
			          	</tr>
					@endforeach
		          </table>
		         
		        </div>
		    </div>
        </form>
      	
      </div> 
</div>
@include("admin.admin_footer")