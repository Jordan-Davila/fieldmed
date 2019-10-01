<?php require 'library/layouts/_header.php'; ?>
<main class="contact-page gradient-blue-bg">
	<section class="main-header-title">
		<div class="layout">
			<h4>SAY HELLO</h4>
			<h1>Contact FieldMed</h1>
			<p class="p14">The program was wildly successful in reducing costs, keeping patients out of ambulances and hospitals</p>
		</div>
	</section>
	<section class="white-box">
		<div class="base-box contact-box">
			<div class="info">
				<div class="image-man-talking"></div>
				<div class="container">
					<div class="logo-full"></div>
					<p class="p14">FieldMed is the first platform designed specifically to serve community health programs, which have already been deployed in over 500 cities nationwide. </p>
					<div class="line"></div>
					<div class="contact-options">
						<h3><i class="icon-pin"></i>Address</h3>
						<div class="line"></div>
						<p class="p14">1633 W Innovation Way,<br>Fifth Floor Lehi, UT 84043</p>
					</div>
					<div class="contact-options">
						<h3><i class="icon-online"></i>Online</h3>
						<div class="line"></div>
						<p class="p14">www.fieldmed.com<br>info@fieldmed.com</p>
					</div>
					<div class="contact-options">
						<h3><i class="icon-phone"></i>Phone</h3>
						<div class="line"></div>
						<p class="p14">1 (800) 544-5456<br>1 (800) 567-3456</p>
					</div>
				</div>
			</div>
			<div class="form">
				<form method="POST" action="./contact.php">
					<h2>Send us a message</h2>
					<div class="line"></div>
					<label for="full_name">Full Name</label>
					<input type="text" name="full_name" placeholder="Your Name">
					<label for="phone">Phone Number</label>
					<input type="text" name="phone" placeholder="Your Number">
					<label for="email">Email Address</label>
					<input type="text" name="email" placeholder="Your Address">
					<label for="company_name">Company Name</label>
					<input type="text" name="company_name" placeholder="Name of your company">
					<label for="your_field">Your Field</label>
					<input type="text" name="your_field" placeholder="Ex: Fire Department">
					<button class="button-pink" type="submit">Send Message <i class="icon-arrow-right"></i></button>
				</form>
			</div>
		</div>
	</section>
</main> 
<footer>
	<?php require 'library/components/_external-links.php'; ?>	
</footer>
<?php require 'library/layouts/_footer.php'; ?>