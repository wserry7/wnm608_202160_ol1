<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<?php include "parts/meta.php"; ?>
</head>


<body>
	
	<?php include "parts/navbar.php"; ?>	

	<div class="container">
		<div class="page-container">
			<div class="display-flex flex-wrap">
				<div class="checkout-detail">
					<div class="checkout-detail-container">
						<div class="checkout-detail-product card soft">
							<figure class="figure">
								<a href="product.php?id=1">
									<img src="img/img-1.jpg" alt="plant">
								</a>
							</figure>

							<div class="checkout-detail-text">
								Product 1
							</div>

							<div class="checkout-detail-text">
								$9.99
							</div>

							<div class="checkout-detail-text">
								Quantity 1
							</div>

							<div>
								<button class="btn-style-2 btn-2">Delete</button>
							</div>
						</div>
						<div class="checkout-detail-product card soft">
							<figure class="figure">
								<a href="product.php?id=2">
									<img src="img/img-1.jpg" alt="plant">
								</a>
							</figure>

							<div class="checkout-detail-text">
								Product 2
							</div>

							<div class="checkout-detail-text">
								$9.99
							</div>

							<div class="checkout-detail-text">
								Quantity 1
							</div>

							<div>
								<button class="btn-style-2 btn-2">Delete</button>
							</div>
						</div>
						<div class="checkout-detail-product card soft">
							<figure class="figure">
								<a href="product.php?id=3">
									<img src="img/img-1.jpg" alt="plant">
								</a>
							</figure>

							<div class="checkout-detail-text">
								Product 3
							</div>

							<div class="checkout-detail-text">
								$9.99
							</div>

							<div class="checkout-detail-text">
								Quantity 1
							</div>

							<div>
								<button class="btn-style-2 btn-2">Delete</button>
							</div>
						</div>
						<div class="checkout-detail-product card soft">
							<figure class="figure">
								<a href="product.php?id=4">
									<img src="img/img-1.jpg" alt="plant">
								</a>
							</figure>

							<div class="checkout-detail-text">
								Product 4
							</div>

							<div class="checkout-detail-text">
								$9.99
							</div>

							<div class="checkout-detail-text">
								Quantity 1
							</div>

							<div>
								<button class="btn-style-2 btn-2">Delete</button>
							</div>
						</div>
					</div>
				</div>

				<div class="checkout-summary center-text">
					<div class="card soft">
						<h3>Total Amount</h3>
						<hr size="1px" width="100%" color="#f1f1f1">

						<h4>Subtotal: $100.00</h4>
						<h4>Tax: $7.00</h4>

						<hr size="1px" width="100%" color="#f1f1f1">

						<h3>Total: $107.00</h3>
						<button class="btn-style-1 btn-1" onclick="location.href='checkout.php'">
							Checkout
						</button>

					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include "parts/footer.php" ?>

</body>
</html>