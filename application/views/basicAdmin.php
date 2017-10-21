<!DOCTYPE HTML>
<html lang="en-us">
<head>
  <title>Preperty Management pvt ltd</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="<?php echo base_url(); ?>resources/css/admin.css" rel="stylesheet">
  <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/admin.js"></script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Prime Propery Management</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="#">Home </a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
         <li><a href="" > Logout </a></li>
        <li><a href=""> You are logged in as:</a></li>
        <li><a href=""> <?php 
                $uname = $this->session->userdata('userName'); 
                echo $uname
                ?> </a></li>
       
      </ul>
    </div><!--/.nav-collapse -->
</div><!--/.navbar -->

<div class="row-offcanvas row-offcanvas-left">
  <div id="sidebar" class="sidebar-offcanvas">
      <div class="col-md-12">
       <ul class="nav nav-pills nav-stacked">
          <li><a href="<?php echo site_url('Property/loadAllPendingPosts')?>">Pending Posts</a></li>
          <li><a href="#">Section</a></li>
          <li><a href="#">Section</a></li>
          <li><a href="#">Section</a></li>
          <li><a href="#">Section</a></li>
          <li><a href="#">Section</a></li>
          <li><a href="#">Section</a></li>
          <li><a href="#">Section</a></li>
          <li><a href="#">Section</a></li>
          <li><a href="#">Section</a></li>
        </ul>
      </div>
  </div>



  
  