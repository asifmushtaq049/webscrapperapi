@include("dashboard.header")

<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{URL::asset('/dashboard/')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Domains / Add Domain</li>
      </ol>
      <div >
      	<form>
          <div class="row">
            <div class="col-md-6"
              <div class="form-group">
                <label for="domain1"><b>Domain Name*</b></label>
                <input type="url" class="form-control" id="domain1" aria-describedby="emailHelp" placeholder="https:\www.example.com">
              </div>
            </div>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Add Domain</button>
        </form>
      	
      </div> 
</div>

@include("dashboard.footer")