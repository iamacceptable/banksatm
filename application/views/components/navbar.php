<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container d-flex align-items-center">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="oi oi-menu"></span> Menu
	  </button>
	  <div class="collapse navbar-collapse" id="ftco-nav">
	    <ul class="navbar-nav mx-auto">
	    	<li class="nav-item <?php if($navbar == 'Home') echo 'active';?>"><a href="<?= base_url();?>" class="nav-link pl-0">Home</a></li>
	    	<li class="nav-item <?php if($navbar == 'ARP') echo 'active';?>"><a href="<?= base_url();?>index.php/ATM_Partners" class="nav-link">ATM Partners</a></li>
	    	<li class="nav-item <?php if($navbar == 'Packages') echo 'active';?>"><a href="<?= base_url();?>index.php/Packages" class="nav-link">Packages</a></li>
	      	<li class="nav-item <?php if($navbar == 'Contact') echo 'active';?>"><a href="<?= base_url();?>index.php/Contact" class="nav-link">Contact Us</a></li>
	      	<li class="nav-item <?php if($navbar == 'About') echo 'active';?>"><a href="<?= base_url();?>index.php/About" class="nav-link">About Us</a></li>
	      	<li class="nav-item <?php if($navbar == 'Apply Now') echo 'active';?>"><a href="<?= base_url();?>index.php/Apply_Now" class="nav-link">Apply Now</a></li>
	    </ul>
	  </div>
	</div>
</nav>