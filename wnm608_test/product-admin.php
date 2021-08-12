<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>
	<?php include "parts/meta.php"; ?>	
</head>


<body>
	
	<?php include "parts/navbar.php"; ?>	

	<?php
		$servername = "hellohammers.com";
		$username = "wk6wojc3kgy4";
		$password = "sotMep-qacti3-cechir";

		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$id = $_GET['id'];
		$action = $_GET['action'] ?? '';

		if (strcmp($action, "update") == 0) {
			$update_sql = "UPDATE dessertshop.products SET name='{$_POST['name']}', price={$_POST['price']}, quantity={$_POST['quantity']}, thumbnail='{$_POST['thumbnail']}' WHERE id = {$id}";
			$conn->query($update_sql);
		}

		$sql = "SELECT id, name, price, quantity, menu_category, thumbnail, discount_percentage FROM dessertshop.products WHERE id = '" . $id . "'";
		$result = $conn->query($sql);

		$name = '';
		$price = '';
		$quantity = 0;
		$thumbnail = '';
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$name = $row["name"];
				$price = $row["price"];
				$quantity = $row["quantity"];
				$thumbnail = $row["thumbnail"];
			}
		}
	?>

	<div class="container">
		<div class="page-container">
			<div class="display-flex flex-wrap">	
				<div class="product-img-container">	
					<img src="img/<?= $thumbnail ?>" class="product-img" alt="">
				</div>

				<div class="product-description-container">
					<form method="post" action="product-admin.php?id=<?= $id ?>&action=update">
						<h2>Edit Product</h2>

						<label class="form-label" for="name">Name</label>
						<input type='text' id="name" name="name" class="form-input" value="<?= $name; ?>" >
						<hr size="1px" width="100%" color="#f1f1f1">

						<label class="form-label" for="price">Price</label>
						<input type='number' id="price" name="price" class="form-input" value="<?= $price; ?>" >
						<hr size="1px" width="100%" color="#f1f1f1">

						<label class="form-label" for="description">Description</label>
						<textarea id="description" name="description" class="form-input" style="width: 300px; height: 200px"><?= $name; ?></textarea>
						<hr size="1px" width="100%" color="#f1f1f1">

						<label class="form-label" for="quantity">Quantity</label>
						<input type='number' id="quantity" name="quantity" class="form-input" value=<?= $quantity; ?> >
						<hr size="1px" width="100%" color="#f1f1f1">

						<label class="form-label" for="thumbnail">Thumbnail</label>
						<input type='text' id="thumbnail" name="thumbnail" class="form-input" value=<?= $thumbnail; ?> >
						<hr size="1px" width="100%" color="#f1f1f1">

						<input class="btn-style-1 btn-1" type="submit" value="Save">
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php include "parts/footer.php"; ?>
</body>


</html>
