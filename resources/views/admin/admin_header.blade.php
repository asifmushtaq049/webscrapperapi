<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>My Dashboard</title>
  <!-- Bootstrap core CSS-->
  <link href="{{URL::asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{URL::asset('/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{URL::asset('/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{URL::asset('/css/sb-admin.css')}}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{URL::asset('/')}}">WEB SCRAPING</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{URL::asset('/admin/')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-cog fa-spin"></i>
            <span class="nav-link-text">Scrap Web</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages" target="_blank">
            <li>
              <a target="_blank" href="{{URL::asset('/admin/fetch_daraz')}}">Scrap daraz.pk</a>
            </li>
            <li>
              <a target="_blank" href="{{URL::asset('/admin/fetch_alibaba')}}">Scrap alibaba.com</a>
            </li>
            <li>
              <a target="_blank" href="{{URL::asset('/admin/fetch_ebay')}}">Scrap ebay.com</a>
            </li>
            <li>
              <a target="_blank" href="{{URL::asset('/admin/fetch_gsmarena')}}">Scrap gsmarena.com</a>
            </li>

            <li>
              <a target="_blank" href="{{URL::asset('/admin/fetch_urdupoint')}}">Scrap urduPoint.com</a>
            </li>
            <li>
              <a target="_blank" href="{{URL::asset('/admin/fetch_mobilephone')}}">Scrap mobile-phone.pk</a>
            </li>


          </ul>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="user profile">
              <a class="nav-link" href="{{URL::asset('/admin/users')}}">
                <i class="fa fa-fw fa-user"></i>
                <span class="nav-link-text">Users Profile</span>
              </a>
            </li>
        </li>
      </ul>
      </div>
      </ul>
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="content-wrapper">
