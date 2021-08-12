<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<?php include "parts/meta.php"; ?>
	<link rel="stylesheet" href="css/storetheme.css">
	<link rel="stylesheet" href="css/sweet_heart.css">
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="js/function.js"></script>
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
		
		$sql = "SELECT id, name, price, quantity, menu_category, thumbnail, discount_percentage FROM dessertshop.products";
		$result = $conn->query($sql);
	?>

	<div class="container page-container">
		<div class="display-flex flex-wrap">
			<h2>Desserts</h2>	
		</div>
		
		<div class="form-control">
				<form class="search-bar" id="product_search">
					<input type="search" placeholder="Name or type">
				</form>
			</div>
			
			<div class="form-control">
				<div class="grid gap xs-small md-mediump">
					<div class="col-xs-6 col-md-2">
						<button data-filter="genre" data-value="" type="button" class="filter-button">All</button>
					</div>
					<div class="col-xs-6 col-md-2">
						<button data-filter="genre" data-value="Cold" type="button" class="filter-button">Cold</button>
					</div>
					<div class="col-xs-6 col-md-2">
						<button data-filter="genre" data-value="Hot" type="button" class="filter-button">Hot</button>
					</div>
					<div class="col-xs-6 col-md-2">
						<button data-filter="genre" data-value="Gluten" type="button" class="filter-button">Gluten free</button>
					</div>
					
					<div class="col-xs-6 col-md-2">
						<div class="form-select">
							<select class="js-sort">
								<option value="1">Newest</option>
								<option value="2">Oldest</option>
								<option value="3">Least Expensive</option>
								<option value="4">Most Expensive</option>
							</select>
						</div>
					</div>
				</div>

		<div class="grid gap">
			<?php while($row = $result->fetch_assoc()) { $id = $row["id"]?>
				<div class="col-xs-12 col-md-3">
					<figure class="figure card soft menu-item">
						<a href="product.php?id=<?php echo $row["id"]?>">
							<img src="img/<?php echo $row["thumbnail"]?>" alt="plant">
						</a>
						
						<figcaption>
							<div><?php echo $row["name"] ?></div>
							<div><?php echo $row["price"] ?></div>
						</figcaption>
						<button class="btn-style-1 btn-1" onclick="location.href='product-admin.php?id=<?= $id ?>'" style="transform: translateX(30%);">
							Edit
						</button>
					</figure>
				</div>
			<?php } ?>
		</div>
	</div>

	<?php include "parts/footer.php" ?>

</body>
</html>
