<?php 
    $page = 'Books';
    
    include '../repeatable/admin/head.php';
    include '../repeatable/pre-loader.php';
    include '../repeatable/admin/navigation-bar.php'
?>


        <?php include '../repeatable/content-header.php'; ?>

        <section class="content">
            <div class="container-fluid">
                <div class="card border-primary">
                    <h5 class="card-header bg-info">
                        <a href="" class="text-light text-sm float-right" data-toggle="modal" data-target="#add-book-modal">
                            <i class="fas fa-plus-circle"></i> Add Book
                        </a>
                    </h5>
                    <div class="card-body">
                        <div class="table-responsive" id="show-note">
                            <table class="table table-stripped table-hover table-sm text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>48 Laws of Power</td>
                                        <td>Robert</td>
                                        <td>
                                            <a href="#" title="View Details" class="text-success infoBtn">
                                                <i class="fas fa-info-circle"></i>&nbsp;
                                            </a>
                                            <a href="#" title="Update Book" class="text-warning editBtn" data-toggle="modal" data-target="#update-book-modal">
                                                <i class="fas fa-edit"></i>&nbsp;
                                            </a>
                                            <a href="#" title="Delete Book" class="text-danger deleteBtn">
                                                <i class="fas fa-trash-alt"></i>
                                            </a> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Add book modal -->
                <div class="modal fade" id="add-book-modal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <h5 class="modal-title text-light">Add New Book</h5>
                                <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form action="#" method="post" id="add-book-form" class="px-3">
                                    <div class="form-group">
                                        <input type="text" name="title" class="form-control" placeholder="Enter title" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="description" class="form-control" id="" cols="30" rows="10" placeholder="Write description here..." required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" id="add-book-btn" name="add-book-submit" value="Add Book" class="btn btn-info btn-block">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Add book modal -->

                <!-- Update book modal -->
                <div class="modal fade" id="update-book-modal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-warning">
                                <h5 class="modal-title text-light">Update Book</h5>
                                <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form action="#" method="post" id="add-book-form" class="px-3">
                                    <div class="form-group">
                                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter title" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="description" id="description" class="form-control" id="" cols="30" rows="10" placeholder="Write description here..." required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="update-book-submit" value="Update Book" class="btn btn-warning btn-block">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Update book modal -->

            </div>
        </section>
    </div>

<?php include '../repeatable/admin/scripts.php' ?>

    