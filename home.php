<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>e-Helper/home</title>
	<link rel="stylesheet" type= text/css href="css/style2.css">
</head>
<body>
	<div class="wrapper">
			<nav class="navbar">
				<img class="logo" src="img/e-helper.png">
				<ul>
					<li><a class="active" href="#">Home</a></li>
					<li><a href="profile/profile.php">Profile</a></li>
					<li><a href="logout.php">Logout</a></li>

				</ul>
			</nav>
	
			
	<div class="center">
		<?php echo "<h1> Hi " . $_SESSION['username'] . "...</h1>"; ?>
		<h3>Welcome to e-Helper</h3>
		<h3>Make It Better</h3>

		<div class="buttons">
				<a href="askHelp/askHelp.php">
				<button>Ask Help</button></a>

				<a href="todo.php">
				<button>ToDo</button></a>

				<a href="calendar/calendar.php">
				<button>Calendar</button></a>
		</div>
	</div>
	
	
</body>
</html>