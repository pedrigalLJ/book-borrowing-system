<?php
	require_once '../session.php';

	$page = 'My Account';
	
	include '../repeatable/borrower/head.php';
	include '../repeatable/pre-loader.php'; 
	include '../repeatable/borrower/navigation-bar.php';
	include '../repeatable/borrower/content-header.php';
?>
		<div class="content">
			<div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
						<div class="card-body">
							<div class="card-deck">
								<div class="card col-sm-3 card-primary card-outline shadow-lg">
									<div class="card-body">
										<div class="text-center mb-4">
											<?php if(!$currentProfile): ?>
												<img class="profile-user-img img-fluid profile-photo" src="../stylesheets/images/avatar.png" alt="Profile picture">
											<?php else: ?>	
												<img class="profile-user-img img-fluid profile-photo" src="<?= '../users-profile-photo/'.$currentProfile; ?>" alt="Profile picture">
											<?php endif; ?>	
										</div>
										<ul class="nav flex-column nav-tabs">
											<li class="nav-item">
												<a href="#profile" class="nav-link active font-weight-bold" data-toggle="tab">Profile</a>
											</li>
											<li class="nav-item">
												<a href="#edit-profile" class="nav-link font-weight-bold" data-toggle="tab">Edit Profile</a>
											</li>
											<li class="nav-item">
												<a href="#change-password" class="nav-link font-weight-bold" data-toggle="tab">Change Password</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="card">
									<div class="tab-content">
										<!-- Profile tab content -->
										<div class="tab-pane fade show active" id="profile">
											<div class="card-header bg-primary">
												<h3 class="card-title">About Me</h3>
											</div>
											<div id="verify-email-alert" class="container mt-2"></div>
											<div class="card-body">
												<strong><i class="fas fa-id-card mr-1"></i> <?php echo $currentName;  ?></strong>
												<p class="text-muted">Name</p>
												<hr>
												<strong><i class="fas fa-envelope mr-1"></i><?php echo $currentEmail; ?></strong>
												<p class="text-muted">Email</p>
												<hr>
												<strong><i class="fas fa-certificate mr-1"></i> 
													<?php if($verified == 'Not Verified!'): ?>
														<span class="text-danger">Not Verified!</span>
														<a href="#" id="verify-email-link" class="float-right font-weight-normal">Verify Now!</a>
													<?php else: ?>
														<span class="text-success">Verified!</span>
													<?php endif; ?>
												</strong>
												<p class="text-muted">Status</p>
												<hr>
												<strong><i class="fas fa-calendar-day mr-1"></i> <?php echo $created; ?></strong>
												<p class="text-muted">Joined</p>
											</div>
										</div>
										<!-- End Profile tab content -->

										<!-- Edit profile tab content -->
										<div class="tab-pane fade" id="edit-profile">
											<div class="card-header bg-primary">
												<h3 class="card-title">Update Profile</h3>
											</div>
											<div class="card-body">
												<form action="#" method="post" class="px-3" id="update-profile-form" enctype="multipart/form-data">
													<input type="hidden" name="old-photo" value="<?= $currentProfile; ?>">
													<div class="input-group mb-3">
														<div class="input-group-prepend">
															<div class="input-group-text"><i class="fas fa-image"></i></div>
														</div>
														<input type="file" class="form-control" name="upd-photo">
													</div>
													<div class="input-group mb-3">
														<div class="input-group-prepend">
															<div class="input-group-text"><i class="fas fa-user-alt"></i></div>
														</div>
														<input type="text" class="form-control" name="upd-fullname" placeholder="Full name" value="<?= $currentName; ?>">
													</div>
													<div class="input-group mb-3">
														<div class="input-group-prepend">
															<div class="input-group-text"><i class="fas fa-envelope"></i></div>
														</div>
														<input type="email" class="form-control" name="upd-email" placeholder="Email" value="<?= $currentEmail; ?>" readonly>
													</div>
													<div class="clearfix"></div>
													<div class="form-group">
														<input type="submit" value="Update" id="update-btn" class="btn btn-primary btn-block myBtn">
													</div>
												</form>
											</div>
										</div>
										<!-- End Edit profile tab content -->

										<!-- Change password tab content -->
										<div class="tab-pane fade" id="change-password">
											<div class="card-header bg-primary">
												<h3 class="card-title">Change Password</h3>
											</div>
											<div id="change-password-alert" class="container mt-2"></div>
											<div class="card-body">
												<form action="#" method="post" class="px-3" id="change-password-form">
													<div class="input-group mb-3">
														<div class="input-group-prepend">
															<div class="input-group-text"><i class="fas fa-key"></i></div>
														</div>
														<input type="password" class="form-control" name="curr-password" id="curr-password" placeholder="Current Password" minlength="6" required>
													</div>
													<div class="input-group mb-3">
														<div class="input-group-prepend">
															<div class="input-group-text"><i class="fas fa-key"></i></div>
														</div>
														<input type="password" class="form-control" name="new-password" id="new-password" placeholder="New Password" minlength="6" required>
													</div>
													<div class="input-group mb-3">
														<div class="input-group-prepend">
															<div class="input-group-text"><i class="fas fa-key"></i></div>
														</div>
														<input type="password" class="form-control" name="confirm-new-password" id="confirm-new-password" placeholder="Confirm New Password" minlength="6" required>
													</div>
													<div class="form-group">
														<div id="passwordError" class="text-danger font-weight-bold"></div>
													</div>
													<div class="clearfix"></div>
													<div class="form-group">
														<p id="change-password-error-alert" class="text-danger"></p>
													</div>
													<div class="form-group">
														<input type="submit" value="Change" id="change-password-btn" class="btn btn-primary btn-block myBtn">
													</div>
												</form>
											</div>
										</div>
										<!-- End change password tab content -->

									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
			</div>
		</div>
	</div>
	
	<?php include '../repeatable/borrower/scripts.php' ?>
	<script type="text/javascript">
		$(document).ready(function(){

			//Profile update ajax request
			$("#update-profile-form").submit(function(e){
				e.preventDefault();

				$.ajax({
					url: '../process.php',
					method: 'post',
					processData: false,
					contentType: false,
					cache: false,
					data: new FormData(this),  // use form data to see image details
					success: function(response){
						location.reload();
						alert('Profile updated successfully!');
					}
				});
			});

			//Change password ajax request
			$("#change-password-btn").click(function(e){
				if($("#change-password-form")[0].checkValidity()){
					e.preventDefault();
					$("#change-password-btn").val('Please Wait...');

					if($("#new-password").val() != $("#confirm-new-password").val()){
						$("#change-password-error-alert").text('* Password did not match!');
						$("#change-password-btn").val('Change');
					}else{
						$.ajax({
							url: '../process.php',
							method: 'post',
							data: $("#change-password-form").serialize()+'&action=change-password',
							success: function(response){
								$("#change-password-alert").html(response);
								$("#change-password-btn").val('Change');
								$("#change-password-error-alert").text('');
								$("#change-password-form")[0].reset();
							}
						});
					}
				}
			});

			//Verify email ajax request
			$("#verify-email-link").click(function(e){
				e.preventDefault();
				$(this).text('Please Wait...');

				$.ajax({
					url: '../process.php',
					method: 'post',
					data: { action: 'verify-email' },
					success: function(response){
						$("#verify-email-alert").html(response);
						$("#verify-email").text('Verify Now!');
					}
				});
			});
		});
	</script>

</body>
</html>
