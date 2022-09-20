<?php include 'index.php';
?>


<?php
include "sessionCon.php";
$name =  $_SESSION['completename'];
$sql = "Select * from `sales` where buyername like '%$name%'";
$result = mysqli_query($conn, $sql);
?>


<?php
include "sessionCon.php";
$name =  $_SESSION['completename'];
$sql2 = "Select * from `sales` where buyername like '%$name%'";
$result2 = mysqli_query($conn, $sql2);

?>


<style>
    .sbt {
        background-color: #e84393;
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;

    }

    .py {
        background-color: #00b894;
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;

    }

    .add {
        background-color: #6c5ce7;
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;

    }

    .wt {
        color: white;
    }

    .rd {
        color: yellow;
    }

    .bg {
        border: none;
        background: transparent;
    }
</style>


<form action="" method="post">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">&nbsp;</h1>
                    <p></p>
                    <button class="sbt wt" name="view">View points</button>
                    <p></p>
                    <select class="form-control" name="category">
                        <?php
                        while ($row = mysqli_fetch_array($result2)) {
                            echo ("<option value='" . $row['seller'] . "'>" . $row['seller'] . "</option>");
                        }
                        ?>
                    </select>

                    <p></p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <p>Customer :<input disabled type="text" name="Cname" id="Cname" class="bg rd " value="<?php $name =  $_SESSION['completename'];echo ($name); ?>"></p>
                            </div>
                            <div class="panel-heading">
                                <?php
                                include "sessionCon.php";
                                if (isset($_POST['view'])) {
                                $name =  $_POST['category'];
                                $name2 =  $_SESSION['completename'];
                                $query2 = "select SUM(incentive) as `sumincentive` from sales where seller like '%$name%' and buyername like '%$name2%'";
                                $res2 = mysqli_query($conn, $query2);
                                $data = mysqli_fetch_array($res2);
                                echo '
                                <p>Total incentive points gain :<input disabled type="text" name="Cname" id="Cname" class="bg rd " value="  ' . $data['sumincentive'] . ' % ">WHERE 1% IS EQUALS TO 1 PESO </p>';
                                }
                                ?>
                            </div>
                        </div>
</form>

<div class="panel panel-default">
    <div class="panel-heading">
        Purchase Information
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <p></p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date Purchase</th>
                        <th>Product Selected</th>
                        <th>Seller Name</th>
                        <th>Amount</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Percentage of incentive</th>
                    </tr>
                </thead>
                <tbody>

                        <?php
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $date = $row['date'];
                                $product = $row['product'];
                                $seller = $row['seller'];
                                $amount = $row['amount'];
                                $quantity = $row['quantity'];
                                $total = $row['total'];
                                $incentive = $row['incentive'];
                                echo
                                '<tr>
                                                                <th scope="row">' . $id . '</th>
                                                                <td>' . $date . '</td>
                                                                <td>' . $product . '</td>
                                                                <td>' . $seller . '</td>
                                                                <td>' . $amount . '</td>
                                                                <td>' . $quantity . '</td>
                                                                <td>' . $total . ' </td>
                                                                <td colspan="3">' . $incentive . ' </td>
                                </tr>                                 
                                                            ';
                            }
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<script src="../js/dataTables/jquery.dataTables.min.js"></script>
<script src="../js/dataTables/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#table').DataTable({
            responsive: true
        });
    });
</script>


