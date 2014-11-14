<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<?php 
			session_start();
			if(!isset($_SESSION['totalGold']))
				$_SESSION['totalGold'] = 0;	
			if(!isset($_SESSION['messages']))
				$_SESSION['messages'] = '';
			if($_SESSION['totalGold'] < 0)
				$class = 'red';
			else 
				$class = '';
	 ?>
</head>
<body>
	<div class='container'>
		<div class='row header'>
			<div class='col-xs-6'>
				<h1 class='<?= $class ?>'>Your Gold: <?= abs($_SESSION['totalGold']); ?></h1>
			</div>
			<div class='col-xs-6'>
				<form method='post' action='process.php'>
					<input type='hidden' name='action' value='reset'>
					<input type='submit' value='Reset' class='btn btn-danger'>	 
				</form>
			</div>
		</div>
		<div class='row body'>
			<div class='col-xs-3 sections'>
				<h3>Farm</h3>
				<form method='post' action='process.php'>
					<input type='hidden' name='action' value='farm'>
					<input type='submit' class='btn btn-warning' value='Enter!'>
				</form>
			</div>
			<div class='col-xs-3'>
				<h3>Cave</h3>
				<form method='post' action='process.php'>
					<input type='hidden' name='action' value='cave'>
					<input type='submit' class='btn btn-warning' value='Enter!'>
				</form>
			</div>
			<div class='col-xs-3'>
				<h3>House</h3>
				<form method='post' action='process.php'>
					<input type='hidden' name='action' value='house'>
					<input type='submit' class='btn btn-warning' value='Enter!'>
				</form>
			</div>
			<div class='col-xs-3'>
				<h3>Casino</h3>
				<form method='post' action='process.php'>
					<input type='hidden' name='action' value='casino'>
					<input type='submit' class='btn btn-warning' value='Enter!'>
				</form>
			</div>
		</div>
		<div class='row footer'>
			<div class='col-xs12'>
				<?= $_SESSION['messages']; ?>
			</div>
		</div>
	</div>
</body>
</html>