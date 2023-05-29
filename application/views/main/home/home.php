<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;800&display=swap');

		body,
		input {
			font-family: 'Inter', sans-serif;
		}

		* {
			box-sizing: border-box;
		}

		/* Create two equal columns that floats next to each other */
		.column {
			float: left;
			width: 50%;
			padding-left: 20px;
			margin-top: 20px;
			padding: 10px;
			height: 300px;
		}

		/*.left {
		    width: 40%;
		    border-top-left-radius: 40px;
		    border-bottom-left-radius: 40px;
		  }*/

		.right {
			width: 60%;
			border-top-right-radius: 40px;
			border-bottom-right-radius: 40px;
		}

		/* Clear floats after the columns */
		.row:after {
			content: "";
			display: table;
			clear: both;
		}

		/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 600px) {
			.column {
				width: 90%;

			}
		}

		.button {
			display: block;
			position: inherit;
			width: fit-content;
			align-items: center;
			height: fit-content;
			border: #FF965B;
			background: #FF965B;
			border-radius: 40px;
			margin-top: 20px;
			float: right;

			font-family: 'Inter';
			font-style: normal;
			font-weight: 500;
			font-size: 25px;
		}

		div.scrollmenu {
			background-color: #333;
			overflow: auto;
			white-space: nowrap;
		}

		div.scrollmenu div {
			display: inline-block;
			color: white;
			text-align: center;
			padding: 14px;
			text-decoration: none;
		}
	</style>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/navbar/dropdown.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/navbar/index.css" />
	<!-- footer -->
	<title>Lihat Event</title>
</head>

<body>

	<!-- Header -->
	<header>
		<div class="css_navbar dropdown_mother">

			<div class="css_navbar brand"><a href="#">GET TIX</a></div>

		</div>
		<nav>
			<div class="css_navbar topnav">

				<a href="<?php echo base_url(); ?>index.php/home"> Home </a>
				<a href="<?php echo base_url(); ?>index.php/profile">Profile</a>
				<a href="<?php echo base_url(); ?>index.php/logout">Log-out</a>
			</div>

			<ul>

				<div class="css_navbar header">

				</div>
				<!-- <li> -->
				<div class="css_navbar dropdown">
					<button class="css_navbar dropbtn"> <img src="images/dropdown.png"> </button>
					<div class="css_navbar dropdown-content">
						<a href="<?php echo base_url(); ?>index.php/home"> Home </a>
						<a href="<?php echo base_url(); ?>index.php/profile">Profile</a>
						<a href="<?php echo base_url(); ?>index.php/logout">Log-out</a>
					</div>
				</div>
				<!-- </li> -->
			</ul>
		</nav>
	</header>
	<!-- Header -->

	<div style="margin : 20px 20px 20px 20px;">
		<h2>Trending</h2>
		<div style="width: 100%;" class="scrollmenu">
			<?php foreach ($trending as $aData) { ?>
				<?php
				$tanggal = explode(' ', $aData->{"event_waktu"});
				?>

				<div class="column left" style="background-image: url('<?php echo base_url(); ?> assets/main/event/img/ <?php echo $aData->{"event_foto"} ?>'); width: 30%; margin: 5px;" onclick="clicked('<?php echo $aData->{"event_id"} ?>')">

				</div>

			<?php } ?>
		</div>
	</div>

	<div style="margin : 20px 20px 20px 20px;">
		<h2>Sebentar lagi</h2>
		<div style="width: 100%">
			<?php foreach ($closer as $aData) { ?>
				<?php
				$tanggal = explode(' ', $aData->{"event_waktu"});
				?>

				<div class="column left" style="background-image: url('<?php echo base_url(); ?>assets/main/event/img/<?php echo $aData->{"event_foto"} ?>'); width: 30%; margin: 5px;" onclick="clicked('<?php echo $aData->{"event_id"} ?>')">

				</div>

			<?php } ?>
		</div>
	</div>


	<br>
	<br>
	<hr>
	<br>
	<footer>
		<div style="display: flex; width: 100%">
			<div style="width: 50%;">
				<center><b>Get Tix</b></center>
				<br>
				Pemesanan tiket konser dan event terfavorit Semarang. Temukan tiket favorit anda di sini
			</div>
			<div style="width: 50%;">
				<b>Menu</b>
				<br>
				- <a href="<?php echo base_url(); ?>index.php/page-aboutus">About Us</a>
				<br>
				- <a href="<?php echo base_url(); ?>index.php/page-contactus">Contact Us</a>
				<br>
				- <a href="<?php echo base_url(); ?>index.php/page-pp">Privacy Policy</a>
			</div>
		</div>
		<br>
		<br>
		<center>© Get Tix 4504 2022. All Rights Reserved</center>
	</footer>

	</footer>

	</footer>

	<script>
		function detail(id) {
			window.location = "<?php echo base_url(); ?>index.php/list/" + id
		}

		function clicked(id) {
			window.location = "<?php echo base_url(); ?>index.php/list/" + id
		}
	</script>
</body>

</html>