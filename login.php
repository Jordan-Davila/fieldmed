<?php require 'library/layouts/_header.php'; ?>
<main class="login-page gradient-blue-bg">
	<header></header> <!-- Adds Margin Top -->
	<section class="white-box">
		<div class="base-box login-box">
			<div class="image-woman-computer"></div>
			<div class="login-form">
				<form method="POST" action="./login.php">
					<h2>Welcome Back!</h2>
					<p class="p14">Signin into your Fieldmed Dashboard</p>
					<div class="line"></div>
					<label for="full_name">Username</label>
					<input type="text" name="username" placeholder="Username">
					<label for="phone">Password</label>
					<input type="password" name="phone" placeholder="Password">
					<button class="button-pink" type="submit">Login <i class="icon-arrow-right"></i></button>
					<p class="p14 forgot-password">Can't remember your passowrd? <a href="reset.php">Reset your password</a></p>
				</form>
			</div>
			<div class="register-form">
				<form method="POST" action="./register.php">
					<h2>Create a new account</h2>
					<p class="p14">New around here? Create an account to enjoy FieldMed.</p>
					<div class="line"></div>
					<label for="full_name">Full Name</label>
					<input type="text" name="full_name" placeholder="Your Name">
					<label for="email">Email Address</label>
					<input type="text" name="email" placeholder="Your Address">
					<label for="company_name">Company Name</label>
					<input type="text" name="company_name" placeholder="Name of your company">
					<label for="your_field">Your Field</label>
					<input type="text" name="your_field" placeholder="Ex: Fire Department">
					<button class="button-pink" type="submit">Register <i class="icon-arrow-right"></i></button>
				</form>
			</div>
		</div>
	</section>
</main>
<footer>
	<?php require 'library/components/_external-links.php'; ?>	
</footer>
<?php require 'library/layouts/_footer.php'; ?>