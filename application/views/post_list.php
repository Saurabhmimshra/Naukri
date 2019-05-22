

<div class="container">
	
	<div class="jobpanel">
		<h1><?= $heading; ?></h1>
		<br><br>

<? 
	if(empty($posts)){
?>
		<div class="alert alert-info">
			No Applications.
		</div>
<?		
	}else{

 foreach ($posts as $row) {
	
?>

		<div class="panel-group">
	    <div class="panel panel-default">
		      <div class="panel-heading">
		      	<div class="ptitle">
		      		<h4><?= $row['title']; ?> at <?= $row['cname']; ?></h4>
		      	</div>
		      </div>
		      
		      <div class="panel-body">
		  		<div class="row">
		  			<div class="col-sm-6" >
		  				<p><em><strong>Job Location: </strong></em><?= $row['location'];?></p>
		  				<p><em><strong>Rquired Qualification: </strong></em><?= $row['qualifications']; ?></p>
		  				
		  			</div>
		  			<div class="col-sm-6">
		  				<p><em><strong>Skills: </strong></em><?= $row['skills'] ;?></p>
		  				<p><em><strong>Required Experience: </strong></em><?= $row['experience']; ?></p>
		  				<!-- <button type="button" class="btn btn-primary">Primary</button> -->
		  		
		  			<? if(!empty($path) && !empty($button_name)){ ?>

			  				<div class="btcr">
			  					<!-- <a href="#"><button type="button" class="btn btn-default">Details</button></a> -->
			  		
			  					<a href="<?= base_url().$path.$row['id'] ;?>"><button type="button" class="btn btn-primary"><?= $button_name; ?></button></a>

			  				</div>

		  			<? } ?>

		  			</div>

		  		</div>
		      </div>
		 
		    </div>


		</div>
<?
		}
	}
?>

	</div>

</div>