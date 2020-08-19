<!-- <?php 
session_start();
include("db.php");
include("auth.php");
if (isset( $_GET['id'])) {


$id = $_GET['id'];

}

if (isset($_GET['act'] )) {
if($_GET['act'] == 'add'){

	if(!isset($_SESSION['sess_cart'])){
		$_SESSION['sess_cart'] = array();
	}


	$_SESSION['sess_cart'][$id] += 1;

	
	header ('location: browse');
}
}
?>
 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bakery Management System</title>
	<link rel="stylesheet" href="bootstrap/css/all.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<style type="text/css">

		.content {
			background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://source.unsplash.com/fdlZBWIP0aM/1920x1080');
			/* Full height */
			height: 100%; 

			/* Center and scale the image nicely */
			background-position: center;
			background-repeat: repeat;
		}


	</style>
</head>
<body class="content">

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light sticky-top shadow bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<a class="navbar-brand" href="#">FDS</a>
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item ">
					<a class="nav-link" href="home">Home</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Browse <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="checkout">Checkout</a>
				</li>
			</ul>
			<div class="form-inline my-2 my-lg-0">
				<a href="action?act=lgout" class="btn btn-outline-success my-2 my-sm-0">Logout</a>
			</div>
		</div>
	</nav>


	<!-- Content -->
	<div class="container p-5" id="browse_box">

		<div class="row">
			<div class="col-9"><h2 class="display-4 text-light">Browse</h2></div>
			<div class="col-3">
				<div class="input-group mt-4">
					<input type="text" id="search_query" class="form-control" placeholder="Search..">
					<div class="input-group-append">
						<button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="browse?q_filter=name">Name</a>
							<a class="dropdown-item" href="browse?q_filter=shop">Shop</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php

		$query = "SELECT * from news_detail";
		$result = mysqli_query($conn, $query);

		$tot_item = mysqli_num_rows($result);

		?>

		<div class="row">
			<div class="col">
				<div class="card-columns" id="display_area">
					<?php
					while($row = mysqli_fetch_assoc($result)){

						$itm_id = $row['nID'];
						$itm_name = $row['nTitle'];
						$itm_prc = $row['nDetail'];
						$itm_desc = $row['nDescription'];
						$itm_img = $row['nImg'];

						?>

						<div class="card text-right" style="width: 18rem;">
							
							<?php 

							if ($itm_img != null) {

								echo '<img class="card-img-top" src="img/'. $itm_img .'" alt="Card image cap">';

							} else {

								echo '<img class="card-img-top" src="https://dummyimage.com/640x360/f0f0f0/aaa" alt="Card image cap">';
							}

							?>

							<div class="card-body">
								<h5 class="card-title"><?php echo $itm_name; ?></h5>
								<p class="card-text"><?php echo $itm_prc; ?></p>
							</div>
							<div class="card-body" id="<?php echo encryptIt($itm_id); ?>">
								<a href="browse?act=view&id=<?php echo encryptIt($itm_id); ?>" class="btn btn-outline-success mx-1">More info</a>
								<a href="browse?act=add&id=<?php echo encryptIt($itm_id); ?>" class="btn btn-success">Add to cart</a>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="container p-5 d-none" id="menu_info">

		<?php
		$id = decryptIt($_GET['id']);

		$query = "SELECT * from news_detail WHERE nID='$id'";
		$row = mysqli_fetch_assoc(mysqli_query($conn, $query));
		?>

		<h2 class="display-4 text-light"><?php echo $row['nTitle']; ?></h2>

		<div class="card">
			<?php

			if ($row['nImg'] != null) {

				echo '<img class="card-img-top" src="img/menu/'. $row['nImg'] .'" alt="Card image cap">';

			} else {

				echo '<img class="card-img-top" src="https://dummyimage.com/640x360/f0f0f0/aaa" alt="Card image cap">';
			}

			?>

			<div class="card-body">
				<p class="card-text text-truncate"><?php echo $row['nDescription']; ?></p>
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><?php echo $row['nDetail']; ?></li>
				
			</ul>
			<div class="card-body text-center" id="<?php echo encryptIt($row['nID']); ?>">
				<a href="browse?act=add&id=<?php echo encryptIt($row['nID']); ?>" class="btn btn-success">Add to cart</a>
			</div>
		</div>
	</div>

	<!-- Script -->
	<script src="bootstrap/js/app.js"></script>
</body>
</html>