<div class="content-wrapper">
		<div class="content-header">
			<div class="container">
				<div class="row mb-2">
					<div class="col-sm-12">
						<ol class="breadcrumb float-sm-left">
							<li class="breadcrumb-item"><?php echo $user ?></li>
							<li class="breadcrumb-item active"><?php echo $page ?></li>
						</ol>
						<a href="#" class="float-right text-info" data-toggle="modal" data-target="#suggest-book-modal"><i class="fas fa-book-open-reader"></i> Suggest Book</a>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="suggest-book-modal">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header bg-info">
						<h5 class="modal-title text-light">Suggest Book</h5>
						<button type="button" class="close text-light" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<form action="#" method="post" id="suggest-book-form" class="px-3">
							<div class="form-group">
								<input type="text" name="title" class="form-control" placeholder="Enter title" required>
							</div>
							<div class="form-group">
								<input type="text" name="author" class="form-control" placeholder="Enter author" required>
							</div>
							<div class="form-group">
								<textarea name="description" class="form-control" id="" cols="30" rows="10" placeholder="Other description here..." required></textarea>
							</div>
							<div class="form-group">
								<input type="submit" id="suggest-book-btn" name="suggest-book-submit" value="Suggest Book" class="btn btn-info btn-block">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
