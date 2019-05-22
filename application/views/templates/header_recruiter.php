<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  	<?= link_tag('assets/css/home.css'); ?>

</head>
<body>

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="<?= base_url() ; ?>">Naukri</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="<?= base_url().'pvtrec/myposts' ; ?>">My Posts</a></li>
	        <li><a href="<?= base_url().'pvtrec/newpost' ?>">New Post</a></li>
	        <!-- <li><a href="<?= base_url().'recruiter/profile' ?>">Profile</a></li> -->
	        <li><a href="<?= base_url().'logout' ?>">Logout</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="<?= base_url().'candidate/profile' ?>"><?= $company_name.' : '. $name; ?></a></li>
	      </ul>
	    </div>
	  </div>
	</nav>