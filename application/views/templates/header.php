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
	        <li class="<?=($this->uri->segment(1)=== NULL || $this->uri->segment(1)==='home')?'active':''?>"><a href="<?= base_url() ; ?>">Home</a></li>
	        <li class="<?=($this->uri->segment(1)==='candidate')?'active':''?>" ><a href="<?= base_url().'candidate' ?>">Candidate Zone</a></li>
	        <li class="<?=($this->uri->segment(1)==='recruiter')?'active':''?>" ><a href="<?= base_url().'recruiter' ?>">Recruiter Zone</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
	      </ul>
	    </div>
	  </div>
	</nav>