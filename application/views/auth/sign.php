<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign in & Sign up Form</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/stylelogin.css" />

  
  
</head>
<body>
  <main>
	<div class="box">
	  <div class="inner-box">
		<div class="forms-wrap">
		  <form action="<?php echo base_url(); ?>index.php/login-action" autocomplete="off" class="sign-in-form">
			<div class="logo">
			  <img src="<?php echo base_url(); ?>assets/img/logo1.png" alt="easyclass" />
			  <h4>GoTix</h4>
			</div>

			<?php echo $this->session->flashdata('pesan') ?>
			
			<div class="heading">
			  <h2>Login</h2>
			  <h6>Not registred yet?</h6>
			  <a href="#" class="toggle">Sign up</a>
			</div>
			<div class="actual-form">
			  <div class="input-wrap">
				<input
					name="username"
				  type="text"
				  minlength="4"
				  class="input-field"
				  autocomplete="off"
				  required
				/>
				<label>Username</label>
			  </div>

			  <div class="input-wrap">
				<input
				name="password"
				  type="password"
				  minlength="4"
				  class="input-field"
				  autocomplete="off"
				  required
				/>
				<label>Password</label>
			  </div>

			  <input type="submit" value="Sign In" class="sign-btn" />

			  <p class="text">
				Forgotten your password or you login datails?
				<a href="#">Get help</a> signing in
			  </p>
			</div>
		  </form>

		  <form action="<?php echo base_url(); ?>index.php/register-action" autocomplete="off" class="sign-up-form">
			<div class="logo">
			  <img src="<?php echo base_url(); ?>assets/img/logo1.png" alt="easyclass" />
			  <h4>DinusTicket</h4>
			</div>

			<div class="heading">
			  <h2>Get Started</h2>
			  <h6>Already have an account?</h6>
			  <a href="#" class="toggle">Sign in</a>
			</div>

			<div class="actual-form">
			  <div class="input-wrap">
				<input
				name="username"
				  type="text"
				  minlength="4"
				  class="input-field"
				  autocomplete="off"
				  required
				/>
				<label>Username</label>
			  </div>

			  <div class="input-wrap">
				<input
				name="email"
				  type="email"
				  class="input-field"
				  autocomplete="off"
				  required
				/>
				<label>Email</label>
			  </div>

			  <div class="input-wrap">
				<input
				name="password"
				  type="password"
				  minlength="4"
				  class="input-field"
				  autocomplete="off"
				  required
				/>
				<label>Password</label>
			  </div>

			  <input type="submit" value="Sign Up" class="sign-btn" />

			  <p class="text">
				By signing up, I agree to the
				<a href="#">Terms of Services</a> and
				<a href="#">Privacy Policy</a>
			  </p>
			</div>
		  </form>
		</div>

		<div class="carousel">
		  <div class="images-wrapper">
			<img src="<?php echo base_url(); ?>assets/img/1.png" class="image img-1 show" alt="" />
			<img src="<?php echo base_url(); ?>assets/img/2.png" class="image img-2" alt="" />
			<img src="<?php echo base_url(); ?>assets/img/3.png" class="image img-3" alt="" />
		  </div>

		  <div class="text-slider">
			<div class="text-wrap">
			  <div class="text-group">
				<h2>Pesan Tiketmu Sekarang</h2>
				<h2>Cari Tiket Konser Jadi Lebih Mudah</h2>
				<h2>Rayakan Masa Mudamu</h2>
			  </div>
			</div>

			<div class="bullets">
			  <span class="active" data-value="1"></span>
			  <span data-value="2"></span>
			  <span data-value="3"></span>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </main>

  <!-- Javascript file -->

  <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
</body>
</html>
