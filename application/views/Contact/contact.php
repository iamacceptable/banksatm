<?php $this->view('main_layout/header');?>
	<!-- main header -->
	<?php $this->view('components/header')?>
	<!-- main header ends here -->
	<!-- main navbar -->
	<?php $this->view('components/navbar')?>
	<!-- main navbar ends here -->
	<!-- homepage content starts -->
		<?php $this->view('Contact/components/main_content')?>
		<?php $this->view('Packages/components/packages')?>
		<?php $this->view('Contact/components/apply')?>
	<!-- homepage content ends -->
	<!-- main footer -->
	<?php $this->view('components/footer');?>
<?php $this->view('main_layout/footer');?>