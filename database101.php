<!DOCTYPE html>
<html>
<head>
	<title>DATABASE101</title>
	<link rel="stylesheet" type="text/css" href="css/jquery101.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="jumbotron" id="headmain">
		<h1 >Registration Form</h1>
	</div>
	<?php $logm=$_SERVER['PHP_SELF']; ?>
	<form action="<?php echo $logm; ?>" method="post">
		<div class="form-group">
			<label name="usr">NAME</label>
			<input class="form-control" type="text" id="inputname"  placeholder="NAME" name="username">
		</div>

		<div class="form-group">
			<label name="usr">EMAIL-ID</label>
			<input class="form-control" type="email" id="inputmail" placeholder="EMAIL" name="email">
		</div>

		<div class="form-group">
			<label name="usr">PASSWORD</label>
			<input class="form-control" type="password" id="inputpass" placeholder="PASSWORD" name="pass">
		</div>

		<div class="form-group">
			<label name="usr">D.O.B.</label>
			<input class="form-control" type="date" id="inputdate" placeholder="DATE OF BIRTH" name="DOB"  >
		</div>

		<div class="row">
			<div class="col-sm-6">
				<button  class="btn btn-primary btn-md  active" id="buttonone" name="button101" type="submit">SUBMIT</button>
			</div>
			<div class="col-sm-6">
				<!-- <button type="reset" class="btn btn-primary btn-md  active" id="buttontwo" >RESET</button> -->
				<input type="reset" value="RESET" class="btn btn-primary btn-md  active" id="buttontwo">

			</div>
		</div>

	

	<!-- <table class="table table-bordered" id="tablemain">
		<tr>
			
			<th>NAME</th>
			<th>EMAIL</th>
			<th>D.O.B.</th>
		</tr>
	</table> -->
</div>
</form>
</body>
</html>


<?php 

	if(isset($_POST['button101']))
	{
		$username=$_POST['username'];
		$pass=$_POST['pass'];
		$email=$_POST['email'];
		$DOB=$_POST['DOB'];

	
		$path=mysql_connect('localhost','root','') or die('CONNECTION NOT CERATED');
		mysql_select_db('mydatabase',$path) or die('DB NOT FOUND');

		$query=	"INSERT INTO database101 (username, email, password, DOB) VALUES ('$username','$email','$pass','$DOB' )";
		$result=mysql_query($query) or die('QUERY NOT EXECUTED');

		$query1="SELECT *FROM database101";

		$result=mysql_query($query1) or die('QUERY1 NOT EXECUTED');
		while($row=mysql_fetch_array($result)){
		 ?>
		<table class="showtable">
			<tr class="row">
				<td id="column1"><?php echo $row['username']; ?></td>
				<td id="column2"><?php echo $row['email']; ?></td>
				<td id="column3"><?php echo $row['DOB']; ?></td>
				<td id="column4"><?php echo $row['pass']; ?></td>

			</tr>

		</table>
			
		<?php 
	}

	}


 ?>

