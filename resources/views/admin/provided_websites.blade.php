@include("admin.admin_header")

<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{URL::asset('/dashboard/')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Provided Websites</li>
      </ol>
      <div >
      	<form>
      		<div class="">

              <div class="  table-hover table-responsive">
			          <table class="table" >
			          	<thead class="thead-dark">
				          	<tr>

				          	</tr>
			          	</thead>
                  
			          </table>
			        </div>
		        </div>
        </form>
      </div>
</div>

@include("admin.admin_footer")
