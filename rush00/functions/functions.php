<?php
	$con = mysqli_connect('127.0.0.1:8889', 'root', 'root', 'ecommerce') or die("Connection Failed");

	//dynamically retrieve categories for sidebar
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

	
	//dynamically retrieve brands for sidebar 
	function getBrands()
	{
		global $con;
			
		//echo var_dump($con);
		$get_brands = "select * from brands";
		$run_brands = mysqli_query($con, $get_brands);
		while ($row = mysqli_fetch_array($run_brands)){
			$id = $row['brand_id'];
			$title =$row['brand_title'];

			echo "<div class='brand_link'><a href='#'>$title</a></div>";
		}
	}

	//dynamically retrieve brand names for selection
	function getBrandSelect()
	{
		global $con;
			
		$get_brands = "select * from brands";
		$run_brands = mysqli_query($con, $get_brands);
		while ($row = mysqli_fetch_array($run_brands)){
			$id = $row['brand_id'];
			$title = $row['brand_title'];

			echo "<option value='$id'>$title</option>";
		}
	}

	//dynamically retrieve category names for selection
	function getCategoriesSelect()
	{
		global $con;
			
		//echo var_dump($con);
		$get_cats = "select * from categories";
		$run_cats = mysqli_query($con, $get_cats);
		while ($row = mysqli_fetch_array($run_cats)){
			$id = $row['cat_id'];
			$title =$row['cat_title'];

			echo "<option value='$id'>$title</option>";
		}
	}
?>
