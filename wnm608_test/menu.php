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
			<div class="col-xs-12 col-md-3">
				<figure class="figure card soft menu-item">
					<a href="product.php?id=1">
						<img src="img/img-1.jpg" alt="plant">
					</a>
					
					<figcaption>
						<div>Special Mango Juice Sago & Pomelo w.Mango Ice Crea</div>
						<div>$7.45</div>
					</figcaption>
				</figure>
			</div>
			
			<div class="col-xs-12 col-md-3">
				<figure class="figure card soft menu-item">
					<a href="product.php?id=2">
						<img src="img/1.png" alt="plant">
					</a>
					
					<figcaption>
						<div>Snow White Mango Juice w.Sago & Pomelo</div>
						<div>$6.45</div>
					</figcaption>
				</figure>
			</div>

			<div class="col-xs-12 col-md-3">
				<figure class="figure card soft menu-item">
					<a href="product.php?id=3">
						<img src="img/2.png" alt="plant">
					</a>
					
					<figcaption>
						<div>Mango Juice w.Glutinous Rice Ball</div>
						<div>$6.95</div>
					</figcaption>
				</figure>
			</div>

			<div class="col-xs-12 col-md-3">
				<figure class="figure card soft menu-item">
					<a href="product.php?id=4">
						<img src="img/3.png" alt="plant">
					</a>
					
					<figcaption>
						<div>Mango Juice w.Watermelon & Rice Ball</div>
						<div>$6.95</div>
					</figcaption>
				</figure>
			</div>

			<div class="col-xs-12 col-md-3">
				<figure class="figure card soft menu-item">
					<a href="product.php?id=5">
						<img src="img/4.png" alt="plant">
					</a>
					
					<figcaption>
						<div>Snow white juice W. Durian and black rice</div>
						<div>$8.45</div>
					</figcaption>
				</figure>
			</div>

			<div class="col-xs-12 col-md-3">
				<figure class="figure card soft menu-item">
					<a href="product.php?id=6">
						<img src="img/5.png" alt="plant">
					</a>
					
					<figcaption>
						<div>Snow White Juice w.Mango and Black Rice</div>
						<div>$7.45</div>
					</figcaption>
				</figure>
			</div>

	
				<div class="col-xs-12 col-md-3">
				<figure class="figure card soft menu-item">
					<a href="product.php?id=7">
						<img src="img/6.png" alt="plant">
					</a>
					
					<figcaption>
						<div>Triple Ice Cream Delight</div>
						<div>$6.45</div>
					</figcaption>
				</figure>
			</div>


			<div class="col-xs-12 col-md-3">
				<figure class="figure card soft menu-item">
					<a href="product.php?id=8">
						<img src="img/7.png" alt="plant">
					</a>
					
					<figcaption>
						<div>Mango Sundae</div>
						<div>$6.95</div>
					</figcaption>
				</figure>
			</div>


			<div class="col-xs-12 col-md-3">
				<figure class="figure card soft menu-item">
					<a href="product.php?id=9">
						<img src="img/8.png" alt="plant">
					</a>
					
					<figcaption>
						<div>Snow White Juice w.Ice Cream</div>
						<div>$6.95</div>
					</figcaption>
				</figure>
			</div>


			<div class="col-xs-12 col-md-3">
				<figure class="figure card soft menu-item">
					<a href="product.php?id=10">
						<img src="img/9.png" alt="plant">
					</a>
					
					<figcaption>
						<div>Mixed Fresh Fruit w.Basil Seed</div>
						<div>$7.45</div>
					</figcaption>
				</figure>
			</div>


			<div class="col-xs-12 col-md-3">
				<figure class="figure card soft menu-item">
					<a href="product.php?id=11">
						<img src="img/10.png" alt="plant">
					</a>
					
					<figcaption>
						<div>Brown Suger Lemon Kumquat</div>
						<div>$5.5</div>
					</figcaption>
				</figure>
			</div>


			<div class="col-xs-12 col-md-3">
				<figure class="figure card soft menu-item">
					<a href="product.php?id=12">
						<img src="img/11.png" alt="plant">
					</a>
					
					<figcaption>
						<div>Mango Agar</div>
						<div>$5</div>
					</figcaption>
				</figure>
			</div>
		</div>
	</div>

	<?php include "parts/footer.php" ?>

</body>
</html>
