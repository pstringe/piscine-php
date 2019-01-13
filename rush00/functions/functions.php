<?php
	$con = mysqli_connect('127.0.0.1:8889', 'root', 'root', 'ecommerce') or die("Connection Failed");

	//get categories
	function getCategories()
	{
		global $con;
			
		//echo var_dump($con);
		$get_cats = "select * from categories";
		$run_cats = mysqli_query($con, $get_cats);
		while ($row = mysqli_fetch_array($run_cats)){
			$id = $row['cat_id'];
			$title =$row['cat_title'];

			echo "<div class='catergory_link'><a href='#'>$title</a></div>";
		}
	}
?>
