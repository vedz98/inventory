<?php require_once 'php_action/core.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<title>SDI Training Portal</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="assets/plugins/datatables/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="custom/css/custom.css">
	<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
    <scipt src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></scipt>
	<link rel="stylesheet" type="text/css" href="assets/jquery-ui/jquery-ui.min.css">
	<script type="text/javascript" src="assets/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <scipt src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></scipt>
    <scipt src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></scipt>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">SDI Training Portal</a>
    </div>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
        <div class="collapse navbar-collapse" id="myNavbar">

    <ul class="nav navbar-nav">
      <li id="navDashboard" style="border-right: solid 1px #ddd;"><a href="dashboard.php">Dashboard</a></li>
	  <li id="navProduct"><a href="product.php">Employee</a></li>
      <li id="navBrand" style="border-right: solid 1px #ddd;"><a href="brand.php">SAP Company</a></li>
      <li id="navCategory" style="border-right: solid 1px #ddd;"><a href="category.php">Category</a></li>
      <li id="topNavAddOrder" style="background-color:#459845;border-right: dotted 2px #1d6b1d;"><a style="color:#ffffff;" href="addOrders.php">Add Request(s)</a></li>
      <li id="topNavManageOrder" style="background-color:#459845;border-right: dotted 2px #1d6b1d;"><a style="color:#ffffff;" href="manageOrders.php">List of Request(s)</a></li>
      <li id="topNavManageOrder" style="background-color:#459845;"><a style="color:#ffffff;" href="specificOrder.php">View Request(s)</a></li>
</ul>


        <ul class="nav navbar-nav navbar-right" id="navProfile">
          <li id="topNavSetting" style="border-left: solid 1px #ddd;border-right: solid 1px #ddd;"><a href="setting.php">Settings</a></li>
          <li id="topNavLogout"><a href="logout.php">Logout</a></li>
        </ul>
    </div>
  </div>
</nav>
<div class="container">