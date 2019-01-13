<!DOCTYPE>
<?php
	include("includes/db.php");

	//dynamically retrieve category names for selection in insert_product.php
	function getCategoriesSelect()
	{
		global $con;
			
		//echo var_dump($con);
		$get_cats = "select * from categories";
		$run_cats = mysqli_query($con, $get_cats);
		while ($row = mysqli_fetch_array($run_cats)){
			$id = $row['cat_id'];
			$title =$row['cat_title'];

			echo "<option value='$title'>$title</option>";
		}
	}
?>
<html>
	<head>
		<title>Add New Products</title>
	</head>
	<body>
		<div id="product_form">
			<form action="insert_product.php" method="post" enctype="multipart/form-data">
				<h2>New Product</h2><br>
				<div class="product_input">
					Product Title: <input type="text" name="product_title">
				</div>
				<div class="product_input">
					Product Category: 
					<select name="product_category">
						<?php
							getCategoriesSelect();
						?>
					</select>
				</div>
				<div class="product_input">
					Product Brand: <input type="text" name="product_brand">
				</div>
				<div class="product_input">
					Product Image: <input type="text" name="product_image">
				</div>
				<div class="product_input">
					Product Price: <input type="text" name="product_price">
				</div>
				<div class="product_input">
					Product Description: <input type="text" name="product_description">
				</div>
				<div class="product_input">
					Product Keywords: <input type="text" name="product_keywords">
				</div>
				<input type="submit" name="insert_post" value="Add Product"/>
			</form>
		</div>
	</body>
</html>
