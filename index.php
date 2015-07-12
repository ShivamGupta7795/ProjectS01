<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/jquery101.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<script src="jquery/jquery-1.11.3.min.js"></script>
	  	<script>		
		$(document).ready(function(){

		  	$("#buttonone").click(function()
		  	{
		  		var x =$('#inputname').val();
		  		var y =$('#inputmail').val();
		  		var z =$("#inputdate").val();
		  		$('#tablemain').append('<tr><td>'+x+'</td><td>'+y+'</td><td>'+z+'</td></tr>');
		  	});

	  });
	</script>

</head>
<body>
		<?php 
					
			$logm=$_SERVER['PHP_SELF'];?>
<div class="container">
	<div class="jumbotron" id="headmain">
		<h1 >Registration Form</h1>
	</div>

	<form action="<?php echo $logm ?>" method="post">
		<div class="form-group">
			<label name="usr">NAME</label>
			<input class="form-control" type="text" id="inputname" name="username"  placeholder="NAME"/>
		</div>

		<div class="form-group">
			<label name="usr">EMAIL-ID</label>
			<input class="form-control" type="email" id="inputmail" placeholder="EMAIL" name="email"/>
		</div>

		<div class="form-group">
			<label name="usr">PASSWORD</label>
			<input class="form-control" type="password" id="inputpass" placeholder="PASSWORD" name="password" >
		</div>

		<div class="form-group">
			<label name="usr">D.O.B.</label>
			<input class="form-control" type="date" id="inputdate" placeholder="DATE OF BIRTH" name="DOB">
		</div>

		<div class="row">
			<div class="col-sm-6">
				<button  class="btn btn-primary btn-md  active" id="buttonone" name="mysubmit">SUBMIT</button>
			</div>
			<div class="col-sm-6">
				<!-- <button type="reset" class="btn btn-primary btn-md  active" id="buttontwo" >RESET</button> -->
				<input type="reset" value="RESET" class="btn btn-primary btn-md  active" id="buttontwo">

			</div>
		</div>

		
	
	
</div>
</form>
		<?php
					if(isset($_POST['mysubmit']))
						{
						$username= $_POST['username'];
						$email=$_POST['email'];
						$DOB=$_POST['DOB'];
					    }
				
		?>
	<table class="table table-bordered" id="tablemain">
			<tr>
				<th>USERNAME</th>	
				<th>EMAIL ID</th>	
				<th>D.O.B.</th>	
				
			</tr>
			<?php 
				if(isset($_POST['mysubmit'])){
				echo " <tr>
						<td>  $username </td>
					   <td>  $email    </td>
					   <td> $DOB  </td> 
					   </tr>";
				}
						
			?>

		</table>
</body>
</html>