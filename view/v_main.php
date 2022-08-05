<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Manage Book</title>
		<!-- font -->
		<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>


		<div class="container" >
			<div class="row" style="background-color: #52AF50;border-radius: 5px; ">
				<div class="col-sm-3">
					<h3 style="color: white; font-family:'Abril Fatface';margin-bottom: 15px; ">Manage Book</h3>
				</div>
				<div class="col-sm-2 col-sm-offset-7" style="margin-top: 15px;">
					<!-- <button type="submit" class="btn" style="background-color: #43B92D; color: white;"><a href=".?controller=login" > Login</a></button> -->
					<a href=".?controller=login" type="submit" class="btn btn-info btn-lg" style="background-color: #FF8C00; color: white; margin-bottom: 10px;">
				          <span class="glyphicon glyphicon-user"></span> Log in
				        </a>
				        <a href=".?controller=signup" type="submit" class="btn btn-info btn-lg" style="background-color: #FF8C00; color: white; margin-bottom: 10px;">
				          <span class="glyphicon glyphicon-user"></span> SIGN UP
				        </a>

				</div>
			</div>
			<hr>
			<?php foreach ($categories as $key => $value): ?>
				<div class="row">
				<div class="col-sm-3 col-sm-offset-5 text-center" style="background-color: gray;border-radius:50%;">
					<h4 style="color: white;"><?php echo $value->categoryname; ?></h4>
				</div>
			</div>
			<?php $book = bookDB::getBookByCategoryId($value->categoryID);?>

			<div class="row" style="margin-top:20px;">
			 <?php foreach ($book as $key => $value): ?>

				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<div class="thumbnail">
						<img data-src="#" alt="">
						<div class="caption">
							<h3><?php echo $value->name; ?></h3>
							<img src="images/<?php echo $value->picture; ?>" style="width: 230px; height: 160px;">
							<p>
								<?php echo $value->summary; ?>
							</p>

						</div>
					</div>
				</div>

			<?php endforeach?>
			</div>
			<hr>
			<?php endforeach?>

		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>