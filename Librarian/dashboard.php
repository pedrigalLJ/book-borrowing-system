<?php 
    $title = 'Librarian | Dashboard';
    $page = 'dashboard';
    
    include 'repeatable/head.php';
    include 'repeatable/pre-loader.php';
    include 'repeatable/navigation-bar.php'
?>

    <div class="content-wrapper">

        <?php include 'repeatable/content-header.php'; ?>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>150</h3>
                                <p>BOOKS</p>
                            </div>
                            <div class="icon">
                                <i class="ion fas fa-book"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>150</h3>
                                <p>RESERVATIONS</p>
                            </div>
                            <div class="icon">
                                <i class="ion fas fa-calendar-check"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3>150</h3>
                                <p>BORROWERS</p>
                            </div>
                            <div class="icon">
                                <i class="ion fas fa-users"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>150</h3>
                                <p>PENALTIES</p>
                            </div>
                            <div class="icon">
                                <i class="ion fas fa-hand-holding-dollar"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php include 'repeatable/footer.php' ?>

    