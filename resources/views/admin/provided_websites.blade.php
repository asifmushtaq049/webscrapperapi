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
                  <thead class="thead-light">
				          	<tr>
				          		<th>www.daraz.pk</th>
                      <th><a target="_blank" href="{{URL::asset('/admin/fetch_daraz')}}">Scrap daraz.pk</a></th>
				          	</tr>
                    <tr>
                      <th>www.alibaba.com</th>
                      <th><a target="_blank" href="{{URL::asset('/admin/fetch_alibaba')}}">Scrap alibaba.com</a></th>
                    </tr>
                    <tr>
                      <th>www.ebay.com</th>
                      <th><a target="_blank" href="{{URL::asset('/admin/fetch_ebay')}}">Scrap ebay.com</a></th>
                    </tr>
                    <tr>
                      <th>www.gsmarena.com</th>
                      <th><a target="_blank" href="{{URL::asset('/admin/fetch_gsmarena')}}">Scrap gsmarena.com</a></th>
                    </tr>
                    <tr>
                      <th>www.mobile-phone.pk</th>
                      <th><a target="_blank" href="{{URL::asset('/admin/fetch_mobilephone')}}">Scrap mobile-phone.pk</a></th>
                    </tr>
                    <tr>
                      <th>www.urdupoint.com</th>
                      <th><a target="_blank" href="{{URL::asset('/admin/fetch_urdupoint')}}">Scrap urdupoint.com</a></th>
                    </tr>
                  </thead>
			          </table>
			        </div>
		        </div>
        </form>
      </div>
</div>

@include("admin.admin_footer")
