<?php
global $con;
session_start();
include('includes/config.php');

// Check if the user is logged in
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mobile</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
    <script src="assets/js/modernizr.min.js"></script>
</head>

<body class="fixed-left">
<!-- Begin page -->
<div id="wrapper">
    <!-- Top Bar Start -->
    <?php include('includes/topheader.php'); ?>
    <!-- ========== Left Sidebar Start ========== -->
    <?php include('includes/leftsidebar.php'); ?>
    <!-- Left Sidebar End -->
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Mobile Login</h4>
                            <ol class="breadcrumb p-0 m-0">
                                <li>
                                    <a href="#">Admin</a>
                                </li>
                                <li>
                                    <a href="#">Category</a>
                                </li>
                                <li class="active">
                                    Mobile Login
                                </li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <?php if (isset($msg)) { ?>
                        <div class="alert alert-success" role="alert">
                            <strong>Well done!</strong> <?php echo htmlentities($msg); ?>
                        </div>
                    <?php } ?>
                    <?php if (isset($delmsg)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <strong>Oh snap!</strong> <?php echo htmlentities($delmsg); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="m-b-30">
                    </div>
                    <div class="table-responsive">
                        <table class="table m-0 table-colored-bordered table-bordered-primary">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>unique_id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Otp</th>
                                <th>verified</th>
                                <th>Time</th>
                                <th>Action</th> <!-- New column for the delete button -->
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $query = mysqli_query($con, "SELECT id, unique_id, name, email, encrypted_password, otp, verified, created_at FROM users");
                            $cnt = 1; // Initialize the $cnt variable
                            while ($row = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo htmlentities($cnt); ?></th>
                                    <td><?php echo htmlentities($row['unique_id']); ?></td>
                                    <td><?php echo htmlentities($row['name']); ?></td>
                                    <td><?php echo htmlentities($row['email']); ?></td>
                                    <td><?php echo htmlentities($row['encrypted_password']); ?></td>
                                    <td><?php echo htmlentities($row['otp']); ?></td>
                                    <td><?php echo htmlentities($row['verified']); ?></td>
                                    <td><?php echo htmlentities($row['created_at']); ?></td>
                                    <td>
                                        <a href="delete_user.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?')" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <?php
                                $cnt++;
                            }
                            ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php'); ?>
</div>
<!--- end row -->
</div> <!-- container -->
</div> <!-- content -->
<?php include('includes/footer.php'); ?>
</div>
</div>
<!-- END wrapper -->
<script>
    // Remove the old script content
    var resizefunc = [];
</script>
<script src="export.js"></script>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="../plugins/switchery/switchery.min.js"></script>
<!-- App js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>
</body>

</html>

