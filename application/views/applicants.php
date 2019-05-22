
<div class="container">
	
	<div class="jobpanel">
		<h1>View Applicants</h1>
		<br><br>
		<div class="row">

<?
	if(empty($candidates)){
?>
		<div class="alert alert-info">
			<p>No Applicants.</p>
		</div>
<?		
	}else{
?>
			<table class="table">
		    <thead>
		      <tr>
		        <th>Name</th>
		        <th>Email Address</th>
		        <th>Mobile Number</th>
		        <th>Education</th>
		      </tr>
		    </thead>
		    <tbody>
		      



<?
		foreach ($candidates as $row) {
	
?>
			<tr>
		        <td><?= $row['name'];?></td>
		        <td><?= $row['email'];?></td>
		        <td><?= $row['mobile'];?></td>
		        <td><?= $row['education'];?></td>

		      </tr>

			<!-- <div class="col-sm-4 tile">
				<h3><?= $row['name'];?></h3>
				<p><strong>Email:</strong><?= $row['email'];?></p>
				<p><strong>Mobile:</strong><?= $row['mobile'];?></p>
				<p><strong>Qualifications:</strong><?= $row['education'];?></p>
			</div> -->

<?

		}
	}
?>
		    </tbody>
		  </table>


		</div>
	</div>

</div>