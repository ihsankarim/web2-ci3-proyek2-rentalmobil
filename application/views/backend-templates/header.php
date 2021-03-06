<?php if(!$this->session->has_userdata('USERNAME')){
  redirect(base_url().'auth/login/logout');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
          <title>General Dashboard &mdash; NF Rentcar</title>

          <!-- General CSS Files -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

          <!-- Template CSS -->
          <link rel="stylesheet" href="<?php echo base_url('assets') ?>/assets/css/style.css">
          <link rel="stylesheet" href="<?php echo base_url('assets') ?>/assets/css/components.css">
</head>
<body>
<div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">Data Mobil</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Referensi Perawatan</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Rental Mobil</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="<?php echo base_url('assets') ?>/assets/img/car/inova.png" alt="product">
                  Inova
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="<?php echo base_url('assets') ?>/assets/img/car/pajero.png" alt="product">
                  Pajero
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="<?php echo base_url('assets') ?>/assets/img/car/Avanza.png" alt="product">
                  Avanza
                </a>
              </div>
              <div class="search-header">
                Fitur
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-dashboard"></i>
                  </div>
                  Dashboard
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Logout
                </a>
              </div>
            </div>
          </div>

        </form>


        <ul class="navbar-nav navbar-right">
          <li class="nav-item"><a href="<?php echo base_url('home'); ?>"  class="nav-link nav-link-lg"><i class="fas fa-home"></i> Home</a>
          
          </li>
          <li class="nav-item"><a href="<?php echo base_url('ListMobil'); ?>" class="nav-link nav-link-lg "><i class="far fa-clipboard"></i> List mobil</a>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?php echo base_url('assets') ?>/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, 
              <?php
              if($this->session->has_userdata('USERNAME')){
                echo $this->session->userdata('USERNAME');
                // echo '-'.$this->session->userdata('ROLE');
                // Untuk menampilkan role pada user
              }
              ?>
            </div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">
              Role AS  <?php if($this->session->has_userdata('USERNAME')){
                echo $this->session->userdata('ROLE');
                // echo '-'.$this->session->userdata('ROLE');
                // Untuk menampilkan role pada user
              }?>
              </div>
              <a href="<?php echo base_url()."admin/dashboard"?>" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="<?php echo base_url()."admin/dashboard"?>" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="<?php echo base_url()."admin/dashboard"?>" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?php echo base_url()."auth/login/logout"?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>