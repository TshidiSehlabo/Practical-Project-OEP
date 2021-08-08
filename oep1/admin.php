<?php include('view/header.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="css/customs.css" rel="stylesheet">
</head>
<body>

<div class="container" style="width:400px; margin-top:60px;">
<div class="card">
<div class="card-body">

	<form class="form-group" action="functions.php" method="post">
		<label>1. Select Module</label><br><br>
		<select name="module_code">
			<option value=""></option>
			<option value="ICT3612">ICT3612</option>
			<option value="ICT3621">ICT3621</option>
			<option value="ICT375">ICT3715</option>
			<option value="ICT3722">ICT3722</option>
		</select><br><br>
		
		<label>2. Choose Exam Type *</label><br><br>	
		<input type="radio" name="exam_type" value="document_upload">Document Upload<br>
		<input type="radio" name="exam_type" value="mcq">MCQ<br>
		<input type="radio" name="exam_type" value="fill_in">Fill-In<br><br>
		<input type="checkbox" name="declation">Honor pledge: I will neither give nor receive aid on this assessment. *<br><br>
		<input type="submit" value="Next" name="next" class="btn-green" >
	</form>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>




