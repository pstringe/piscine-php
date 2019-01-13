<!DOCTYPE>

<?php
	include("functions/functions.php");
?>

<html>
	<head>
		<title>
			Test Shop
		</title>
		<link rel="stylesheet" href="styles/style.css" media="all"/>
	</head>
	<body>
		<div class="main">
			<div class="header">
			</div>
			<div class="navbar">
				<div class="menu">
					<div class="menu_link"><a href="#">Home</a></div>
					<div class="menu_link"><a href="#">Products</a></div>
					<div class="menu_link"><a href="#">My Account</a></div>
					<div class="menu_link"><a href="#">Sign-Up</a></div>
					<div class="menu_link"><a href="#">Cart</a></div>
					<div class="menu_link"><a href="#">Contact</a></div>
				</div>
				<div id="search_form">
					<form method="get" action="results.php" enctype="multipart/form-data">
						<input type="text" name="user_query" placeholder="Search"/>
						<input type="submit" name="search" value="Search" />
					</form>
				</div>
			</div>
			<div class="sidebar">
				<div id="sidebar_title">
					Categories
				</div>
				<div id="Categories">
					<div class="catergory_link"><a href="#">1</a></div>
					<div class="catergory_link"><a href="#">2</a></div>
					<div class="catergory_link"><a href="#">4</a></div>
					<?php getCategories(); ?>
				</div>
				
			</div>
			<div class="content">
			</div>
			<div class="footer">
			</div>
		</div>
	</body>
</html>
