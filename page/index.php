<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Seller Incentive System</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/metisMenu.min.css" rel="stylesheet">
        <link href="../css/timeline.css" rel="stylesheet">
        <link href="../css/startmin.css" rel="stylesheet">
        <link href="../css/morris.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">INCENTIVE SYSTEM </a>
                </div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">
                            <?php
                            $name =  $_SESSION['completename'];
                            echo ($name); ?>
                            <i class="fa fa-user fa-fw"></i><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                        <?php
                            $current_user_id = $_SESSION['position'];
                            if ($current_user_id == "Administrator") :
                            ?>
                            <li><a href="register.php"><i class="fa fa-user fa-fw"></i> User Register</a>
                            </li>
                            <?php endif; ?>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            
                            <?php
                            $current_user_id = $_SESSION['position'];
                            if ($current_user_id == "Seller" or $current_user_id == "Administrator"):
                            ?>
                                <li>
                                    <a href="Sellers.php"><i class="fa fa-pencil fa-fw"></i>Seller`s Input Form</a>
                                </li>
                                <li>
                                    <a href="cus_reports.php"><i class="fa fa-file fa-fw"></i> Seller’s Recorded form</a>
                                </li>
                            <?php endif; ?>

                            
                            <?php
                            $current_user_id = $_SESSION['position'];
                            if ($current_user_id == "Customer" or $current_user_id == "Administrator" ) :
                            ?>
                                <li>
                                    <a href="customerpurchase.php"><i class="fa  fa-money fa-fw"></i> Customer Purchase</a>
                                </li>
                                <li>
                                    <a href="customermonitoring.php"><i class="fa  fa-user fa-fw"></i> Customer Monitoring</a>
                                </li>
                            <?php endif; ?>
                            <?php
                            $current_user_id = $_SESSION['position'];
                            if ($current_user_id == "Administrator") :
                            ?>
                            <li>
                                <a href="accsettings.php"><i class="fa  fa-edit fa-fw"></i> Account Settings</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>
            <script src="../js/jquery.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/metisMenu.min.js"></script>
            <script src="../js/startmin.js"></script>
    </body>

    </html>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>