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
				<div class="checkout-detail card soft">
					<h3>Shipping Information</h3>
					<form>
						<div class="form-control">
							<label class="form-label">Street Address</label>
							<input type="text" placeholder="Street Address" class="form-input">
						</div>
						<div class="form-control">
							<label class="form-label">County</label>
							<input type="text" placeholder="County" class="form-input">
						</div>
						<div class="form-control">
							<label class="form-label">State</label>
							<input type="text" placeholder="State" class="form-input">
						</div>
						<div class="form-control">
							<label class="form-label">Zip</label>
							<input type="text" placeholder="Zip" class="form-input">
						</div>
					</form>


					<h3>Payment Information</h3>
					<form>
						<div class="form-control">
							<label class="form-label">Card Number</label>
							<input type="text" placeholder="Card Number" class="form-input">
						</div>
						<div class="form-control">
							<label class="form-label">Expiration Date</label>
							<input type="text" placeholder="Expiration Date" class="form-input">
						</div>
						<div class="form-control">
							<label class="form-label">CVV</label>
							<input type="text" placeholder="CVV" class="form-input">
						</div>
					</form>
				</div>

				<div class="checkout-summary center-text">
					<div class="card soft">
						<h3>Total Amount</h3>
						<hr size="1px" width="100%" color="#f1f1f1">

						<h4>Subtotal: $100.00</h4>
						<h4>Tax: $7.00</h4>

						<hr size="1px" width="100%" color="#f1f1f1">

						<h3>Total: $107.00</h3>
						<button class="btn-style-1 btn-1" onclick="location.href='comfirm.php'">
							Place Order
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include "parts/footer.php" ?>

</body>
</html>