<?php $this->view('main_layout/header');?>
	<!-- main header -->
	<?php $this->view('components/header')?>
	<!-- main header ends here -->
	<!-- main navbar -->
	<?php $this->view('components/navbar')?>
	<!-- main navbar ends here -->
	<!-- homepage content starts -->
		<?php $this->view('Homepage/components/caurosel')?>
		<?php $this->view('Homepage/components/intro')?>
		<?php $this->view('Homepage/components/howtoapply')?>
		<?php $this->view('Homepage/components/apply')?>
		<?php $this->view('Homepage/components/leading')?>
		<?php $this->view('Packages/components/packages')?>
		<?php $this->view('Homepage/components/testimonials')?>
	<!-- homepage content ends -->
	<!-- main footer -->
	<?php $this->view('components/footer');?>
<?php $this->view('main_layout/footer');?>