<!DOCTYPE html>
<html>
<head>
	<title>Shopify App</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<br class="xs-80">
		<br class="xs-80">
		<div class="col-md-12">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<h3>Welcome to the TrustLock App.</h3>
				<h5>Please Enter your Shopify Store Name to install the app</h5>
				<?php if(isset($errorMessage)) { ?>
					<h5 class="alert alert-danger"><?php echo $errorMessage; ?></h5>
				<?php } ?>
				<form class="form account-form" method="POST" action="Install.php">
					<div class="form-group">
						<label for="storeName" class="placeholder-hidden">Add Store Name Here (exp:storename.myshopify.com)</label>
						<input type="text" class="form-control" id="storeName" name="shop" placeholder="Add Store Name Here" tabindex="1" required="required">
					</div>
					<div class="form-group">
						<button type="submit" name="shopInstallation" id="shopInstallation" class="btn btn-primary btn-block btn-lg" tabindex="4">
							Install App Now <i class="fa fa-play-circle"></i>
						</button>
					</div>
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</body>
</html>