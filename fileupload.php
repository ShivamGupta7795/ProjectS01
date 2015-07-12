<!DOCTYPE html>
<html>
<head>
	<title>FILE UPLOAD 101</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<style>
	.jumbotron{
		background-color: blue; 
		color: white;
	}

	</style>
</head>
<body>
<?php $logm=$_SERVER['PHP_SELF']; ?>
	
	<div class="container">
	<div class="jumbotron"><h1>FILE UPLAOD<h1></div>
		<div class="form-group">
			<form action="<?php echo $logm?>" method="post" enctype="multipart/form-data">

				<input type="text" name="username" class="form-control" placeholder="USER_NAME"/>
				<input type="password" name="password" class="form-control" placeholder="PASSWORD"/>
				<input type="file" name="fileupload" id="fileupload" />
				<button type="submit" name="submitone" class="btn btn-primary">SUBMIT</button>
			</form>
		</div>
	</div>
</body>
</html>


<?php

  
  if(isset($_POST['submitone']))
  {			
		$filetarget="../img/".basename($_FILES['fileupload']['name']);

		$imagetype=pathinfo($filetarget,PATHINFO_EXTENSION);
		  $uploadok=1;

		$username=$_POST['username'];
		$password=$_POST['password'];

  		$check=getimagesize($_FILES['fileupload']['tmp_name']);

  		if($check!==false){

  			echo "file is correct";
  			$uploadok=1;
  		}

  		else{
  			echo "<script>alert('no file selected' )</script>";
  			$uploadok=0;
  		}



  


	  if(file_exists($filetarget)){
	  	echo "<script>alert('FILE ALREADY EXISTS')</script>";
	  }

	  if($_FILES['fileupload']['size']>50000){
	  		echo "<script>alert('TOO BIG FILE')</script>";
	  }

	  if($imagetype!="jpg" && $imagetype!="jpeg" && $imagetype!="gif" && $imagetype!="png"){
	  	echo "<script> alert('FILE NOT COMPATIBLE');</script>";
	  }

	}

?>