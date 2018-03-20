@include("dashboard.header")

<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Domains / All Domains</li>
      </ol>
      <div >
      	<div class="row">
<div class="col-sm-2">
<div class="row">
<div class="col-sm-12 text-center">
<div style="max-width:200px; margin: 0 auto;">
<img alt="" src="https://sma.tecdiary.com/assets/images/male.png" class="avatar"> </div>
<h4>Login Email</h4>
<p><i class="fa fa-envelope"></i> owner@tecdiary.com</p>
</div>
</div>
</div>
<div class="col-sm-10">
<ul id="myTab" class="nav nav-tabs">
<li class="active"><a href="#edit" class="tab-grey">Edit</a></li>
<li class=""><a href="#cpassword" class="tab-grey">Change Password</a></li>
<li class=""><a href="#avatar" class="tab-grey">Avatar</a></li>
</ul>
<div class="tab-content">
<div id="edit" class="tab-pane in active">
<div class="box">
<div class="box-header">
<h2 class="blue"><i class="fa-fw fa fa-edit nb"></i>Edit Profile</h2>
</div>
<div class="box-content">
<div class="row">
<div class="col-lg-12">
<form action="https://sma.tecdiary.com/admin/auth/edit_user/1" class="form-horizontal bv-form" data-toggle="validator" role="form" method="post" accept-charset="utf-8" novalidate="novalidate"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
<input type="hidden" name="token" value="2dcdc10cee91351751eba015eb0c8e17">
<div class="row">
<div class="col-md-12">
<div class="col-md-5">
<div class="form-group">
<label for="first_name">First Name *</label> <div class="controls">
<input type="text" name="first_name" value="Owner" class="form-control" id="first_name" required="required" data-bv-field="first_name">
</div>
<small class="help-block" data-bv-validator="notEmpty" data-bv-for="first_name" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter/select a value</small></div>
<div class="form-group">
<label for="last_name">Last Name *</label>
<div class="controls">
<input type="text" name="last_name" value="Owner" class="form-control" id="last_name" required="required" data-bv-field="last_name">
</div>
<small class="help-block" data-bv-validator="notEmpty" data-bv-for="last_name" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter/select a value</small></div>
<div class="form-group">
<label for="company">Company *</label> <div class="controls">
<input type="text" name="company" value="Stock Manager" class="form-control" id="company" required="required" data-bv-field="company">
</div>
<small class="help-block" data-bv-validator="notEmpty" data-bv-for="company" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter/select a value</small></div>
<div class="form-group">
<label for="phone">Phone *</label> <div class="controls">
<input type="tel" name="phone" class="form-control" id="phone" required="required" value="012345678" data-bv-field="phone">
</div>
<small class="help-block" data-bv-validator="notEmpty" data-bv-for="phone" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter/select a value</small></div>
<div class="form-group">
<label for="gender">Gender *</label> <div class="controls"> <div class="select2-container tip form-control" id="s2id_gender" data-original-title="" title=""><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-1">Male</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1" class="select2-offscreen">Gender</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1" id="s2id_autogen1"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen1_search" class="select2-offscreen">Gender</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-1" id="s2id_autogen1_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-1">   </ul></div></div><select name="gender" class="tip form-control" id="gender" required="required" tabindex="-1" title="" style="display: none;" data-original-title="Gender" data-bv-field="gender">
<optgroup label="">
<option value="male" selected="selected">Male</option>
<option value="female">Female</option>
</optgroup>
</select>
</div>
<small class="help-block" data-bv-validator="notEmpty" data-bv-for="gender" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter/select a value</small></div>
</div>
<div class="col-md-6 col-md-offset-1">
<input type="hidden" name="id" value="1">
<input type="hidden" name="paeu1Cnc" value="Cqs8AUX2RKk7gtpFdMLE">
</div>
</div>
</div>
<p><input type="submit" name="update" value="Update" class="btn btn-primary">
</p>
</form> </div>
</div>
</div>
</div>
</div>
<div id="cpassword" class="tab-pane fade">
<div class="box">
<div class="box-header">
<h2 class="blue"><i class="fa-fw fa fa-key nb"></i>Change Password</h2>
</div>
<div class="box-content">
<div class="row">
<div class="col-lg-12">
<form action="https://sma.tecdiary.com/admin/auth/change_password" id="change-password-form" method="post" accept-charset="utf-8" novalidate="novalidate" class="bv-form"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
<input type="hidden" name="token" value="2dcdc10cee91351751eba015eb0c8e17">
<div class="row">
<div class="col-md-12">
<div class="col-md-5">
<div class="form-group">
<label for="curr_password">Old Password *</label> <br>
<input type="password" name="old_password" value="" class="form-control" id="curr_password" required="required" data-bv-field="old_password">
<small class="help-block" data-bv-validator="notEmpty" data-bv-for="old_password" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter/select a value</small></div>
<div class="form-group">
<label for="new_password">New Password *</label>
<br>
<input type="password" name="new_password" value="" class="form-control" id="new_password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" data-bv-regexp-message="At least 1 capital, 1 lowercase, 1 number and more than 8 characters long" data-bv-field="new_password">
<span class="help-block">At least 1 capital, 1 lowercase, 1 number and more than 8 characters long</span>
<small class="help-block" data-bv-validator="notEmpty" data-bv-for="new_password" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter/select a value</small><small class="help-block" data-bv-validator="regexp" data-bv-for="new_password" data-bv-result="NOT_VALIDATED" style="display: none;">At least 1 capital, 1 lowercase, 1 number and more than 8 characters long</small></div>
<div class="form-group">
<label for="new_password_confirm">Confirm Password *</label> <br>
 <input type="password" name="new_password_confirm" value="" class="form-control" id="new_password_confirm" required="required" data-bv-identical="true" data-bv-identical-field="new_password" data-bv-identical-message="The password and confirm password are not the same" data-bv-field="new_password_confirm">
<small class="help-block" data-bv-validator="identical" data-bv-for="new_password_confirm" data-bv-result="NOT_VALIDATED" style="display: none;">The password and confirm password are not the same</small><small class="help-block" data-bv-validator="notEmpty" data-bv-for="new_password_confirm" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter/select a value</small></div>
<input type="hidden" name="user_id" value="1" id="user_id">
<p><input type="submit" name="change_password" value="Change Password" class="btn btn-primary">
</p>
</div>
</div>
</div>
</form> </div>
</div>
</div>
</div>
</div>
<div id="avatar" class="tab-pane fade">
<div class="box">
<div class="box-header">
<h2 class="blue"><i class="fa-fw fa fa-file-picture-o nb"></i>Change Avatar</h2>
</div>
<div class="box-content">
<div class="row">
<div class="col-lg-12">
<div class="col-md-5">
<div style="position: relative;">
</div>
<form action="https://sma.tecdiary.com/admin/auth/update_avatar" enctype="multipart/form-data" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="2dcdc10cee91351751eba015eb0c8e17">
<div class="form-group">
<label for="change_avatar">Change Avatar</label> <span class="file-input file-input-new">
<div class="input-group ">
   <div tabindex="-1" class="form-control file-caption  kv-fileinput-caption">
   <div class="file-caption-name"></div>
</div>
   <div class="input-group-btn">
       <button type="button" class="btn btn-default btn-danger fileinput-remove fileinput-remove-button"><i class="fa fa-ban-circle"></i> Remove</button>
       
       <div class="btn btn-primary btn-file"> <i class="fa fa-folder-open"></i> &nbsp;Browse ... <input type="file" data-browse-label="Browse ..." name="avatar" id="product_image" required="required" data-show-upload="false" data-show-preview="false" accept="image/*" class="form-control file"></div>
   </div>
</div></span>
</div>
<div class="form-group">
<input type="hidden" name="id" value="1">
<input type="hidden" name="paeu1Cnc" value="Cqs8AUX2RKk7gtpFdMLE">
<input type="submit" name="update_avatar" value="Update Avatar" class="btn btn-primary">
 </div></form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script><script>
        $(document).ready(function () {
            $('#change-password-form').bootstrapValidator({
                message: 'Please enter/select a value',
                submitButtons: 'input[type="submit"]'
            });
        });
    </script>
<div class="clearfix"></div>
</div>
      </div> 
</div>

@include("dashboard.footer")