<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>
	<?php include "parts/meta.php"; ?>	
</head>


<body>
	
	<?php include "parts/navbar.php"; ?>	


	<div class="container">
		<div class="page-container">
			<div class="display-flex flex-wrap">	
				<div class="product-img-container">	
					<img src="img/img-1.jpg" class="product-img" alt="">
				</div>

				<div class="product-description-container">
					<h2><?=$_GET['name']; ?></h2>
					<h3><?=$_GET['price']; ?></h3>
					<hr size="1px" width="100%" color="#f1f1f1">

					<h4>Description</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Odium autem et invidiam facile vitabis. Memini vero, inquam; Teneo, inquit, finem illi videri nihil dolere. Duo Reges: constructio interrete. Profectus in exilium Tubulus statim nec respondere ausus; Quicquid enim a sapientia proficiscitur, id continuo debet expletum esse omnibus suis partibus;</p>	
					<hr size="1px" width="100%" color="#f1f1f1">

					<p>Quantity</p>
					<div class="form-control">	
						<input type="number" placeholder="1" class="form-input">
					</div>	

					<button class="btn-style-1 btn-1" onclick="location.href='cart.php'">
						Add to Cart
					</button>
				</div>
			</div>	


			<h3>Similar Desserts</h3>
			<div class="grid gap">
				<div class="col-xs-12 col-md-3">
					<figure class="figure card soft">
						<a href="product.php?id=1">
							<img src="img/img-1.jpg" alt="">
						</a>

						<figcaption>
							<div>Special Mango Juice Sago & Pomelo w.Mango Ice Crea</div>
							<div>$7.45</div>
						</figcaption>
					</figure>
				</div>
			

				<div class="col-xs-12 col-md-3">
					<figure class="figure card soft">
						<a href="product.php?id=2">
							<img src="img/1.png" alt="">
						</a>

						<figcaption>
							<div>Snow White Mango Juice w.Sago & Pomelo</div>
							<div>$6.45</div>
						</figcaption>
					</figure>
				</div>
				

				<div class="col-xs-12 col-md-3">
					<figure class="figure card soft">
						<a href="product.php?id=3">
							<img src="img/2.png" alt="">
						</a>

						<figcaption>
							<div>Mango Juice w.Glutinous Rice Ball</div>
							<div>$6.95</div>
						</figcaption>
					</figure>
				</div>

				<div class="col-xs-12 col-md-3">
					<figure class="figure card soft">
						<a href="product.php?id=4">
							<img src="img/3.png" alt="">
						</a>

						<figcaption>
							<div>Mango Juice w.Watermelon & Rice Ball</div>
							<div>$6.95</div>
						</figcaption>
					</figure>
				</div>
			</div>
		</div>
	</div>
	<?php include "parts/footer.php"; ?>
</body>


</html>
