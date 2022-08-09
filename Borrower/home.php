<?php
	require_once '../session.php';
	// echo '<pre>';
	// print_r($data);
	
	$page = 'Home';
	
	include '../repeatable/borrower/head.php';
	include '../repeatable/pre-loader.php'; 
	include '../repeatable/borrower/navigation-bar.php';
	include '../repeatable/borrower/content-header.php';
?>

	
		<div class="content">
			<div class="container">
				<?php if($verified == 'Not Verified!'): ?>
					<div class="alert alert-danger alert-dismissible text-center mt-0 m-0">
						<button class="close" type="button" data-dismiss="alert">&times;</button>
						Your email is not verified! We have sent a verification link on your email, please check!
					</div>
				<?php endif; ?>
				<div class="card mt-4" style="width: 18rem;">
					<a href="#" data-toggle="tooltip" data-placement="top" title="Short description here">
						<img class="card-img-top" src="../stylesheets/images/logo.png" alt="Card image cap">
					</a>
					<div class="card-body">
						<p class="card-title">Title here</p>
						<p class="card-text text-muted text-sm">by: Author here</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php include '../repeatable/borrower/scripts.php' ?>

</body>
</html>
