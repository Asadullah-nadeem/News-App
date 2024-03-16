<?php
global $con;
session_start();
include('./config.php');

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
    <link rel="stylesheet" href="plugins/switchery/switchery.min.css">
    <script src="assets/js/modernizr.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Madimi+One&family=Mohave:ital,wght@0,300..700;1,300..700&family=Nova+Square&family=Roboto+Slab&family=Strait&display=swap" rel="stylesheet">
    <style>
        .dark-black {
            color: #1a202c;
            font-family: "Madimi One", sans-serif;
            font-weight: 400;
            font-style: normal;
        }
        @keyframes slideInFromLeft {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(0);
            }
        }
    </style>

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
            <div class="container mx-auto">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Mobile Login</h4>
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
                            <strong class="font-bold">Well done!</strong> <?php echo htmlentities($msg); ?>
                        </div>
                    <?php } ?>
                    <?php if (isset($delmsg)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <strong class="font-bold">Oh snap!</strong> <?php echo htmlentities($delmsg); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="m-b-30"></div>
                    <div class="table-responsive">
                        <table class="table m-0 table-bordered border-primary">
                            <thead>
                            <tr>
                                <th class="px-4 py-2">No.</th>
                                <th class="px-4 py-2">Unique Id</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">Password</th>
                                <th class="px-4 py-2">OTP</th>
                                <th class="px-4 py-2">verified</th>
                                <th class="px-4 py-2">Time</th>
                                <th class="px-4 py-2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $query = mysqli_query($con, "SELECT id, unique_id, name, email, encrypted_password, otp, verified, created_at FROM users");
                            $cnt = 1;
                            while ($row = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td class="border px-4 py-2 dark-black"><?php echo htmlentities($cnt); ?></td>
                                    <td class="border px-4 py-2 dark-black"><?php echo htmlentities($row['unique_id']); ?></td>
                                    <td class="border px-4 py-2 dark-black"><?php echo htmlentities($row['name']); ?></td>
                                    <td class="border px-4 py-2 dark-black"><?php echo htmlentities($row['email']); ?></td>
                                    <td class="border px-4 py-2 dark-black"><?php echo htmlentities($row['encrypted_password']); ?></td>
                                    <td class="border px-4 py-2 dark-black"><?php echo htmlentities($row['otp']); ?></td>
                                    <td class="border px-4 py-2 dark-black"><?php echo htmlentities($row['verified']); ?></td>
                                    <td class="border px-4 py-2 dark-black"><?php echo htmlentities($row['created_at']); ?></td>
                                    <td class="border px-4 py-2 dark-black">
                                        <a href="delete_user.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?')" >
                                            <i class="fa fa-trash"></i>
                                        </a>
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
<script src="../export.js"></script>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="plugins/switchery/switchery.min.js"></script>
<!-- App js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>
</body>

</html>

