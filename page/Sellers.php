<?php include 'index.php';
?>



<?php
include "sessionCon.php";
$sql = "Select * from `sellers`";
$result = mysqli_query($conn, $sql);
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

    tr:hover {
        background-color: #82ccdd;
    }
</style>



<form action="" method="post">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Edit Seller Information</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" type="hidden" name="id" id="id">
                                    <input class="form-control" placeholder="Complete name" type="text" name="completename" id="completename">
                                    <input class="form-control" placeholder="Age" type="text" name="age" id="age">
                                    <input class="form-control" placeholder="Address" type="text" name="address" id="address">
                                    <input class="form-control" placeholder="Product" type="text" name="product" id="product">
                                    <label>Amount</label>
                                    <input class="form-control" placeholder="Amount" type="text" name="amount" id="amount">
                                    <label>Incentive percentage</label>
                                    <input class="form-control" placeholder="Percentage of incentive" type="text" name="incentive" id="incentive">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="add wt" data-dismiss="modal">Close</button>
                        <button class="py wt" name="update">Update Seller</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Add Seller</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" type="hidden" name="id2" id="id2">
                                    <input class="form-control" placeholder="Complete name" type="text" name="completename2" id="completename2">
                                    <input class="form-control" placeholder="Age" type="text" name="age2" id="age2">
                                    <input class="form-control" placeholder="Address" type="text" name="address2" id="address2">
                                    <input class="form-control" placeholder="Product" type="text" name="product2" id="product2">
                                    <label>Amount</label>
                                    <input class="form-control" placeholder="Amount" type="text" name="amount2" id="amount2">
                                    <label>Incentive percentage</label>
                                    <input class="form-control" placeholder="Percentage of incentive" type="text" name="incentive2" id="incentive2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="add wt" data-dismiss="modal">Close</button>
                        <button class="py wt" name="add">Add Seller</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">&nbsp;</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Sellers Input Form
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <button type="button" data-toggle="modal" data-target="#myModal2" name="edit" class="add wt">Add new seller</button>
                        <p></p>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Complete Name</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Product</th>
                                        <th>Amount</th>
                                        <th>Percentage of incentive</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($result) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $id = $row['id'];
                                            $completename = $row['completename'];
                                            $age = $row['age'];
                                            $address = $row['address'];
                                            $product = $row['product'];
                                            $amount = $row['amount'];
                                            $incentive = $row['incentive'];
                                            echo
                                            '<tr>
                                                            <th scope="row">' . $id . '</th>
															<td>' . $completename . '</td>
                                                            <td>' . $age . '</td>
															<td>' . $address . '</td>
                                                            <td>' . $product . '</td>
															<td>' . $amount . '</td>
                                                            <td>' . $incentive . ' </td>
                                                            <td>
                                                            <button type="button" data-toggle="modal" data-target="#myModal" name="edit" class="py wt">Update</button>
                                                            <button class="sbt wt"><a class="wt" href="delete.php?deleteid=' . $id . '">Delete</a></button>
                                                            </td>
                                                        </tr>';
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <script>
                                var table = document.getElementById('table');
                                for (var i = 1; i < table.rows.length; i++) {
                                    table.rows[i].onclick = function() {
                                        document.getElementById("id").value = this.cells[0].innerHTML;
                                        document.getElementById("completename").value = this.cells[1].innerHTML;
                                        document.getElementById("age").value = this.cells[2].innerHTML;
                                        document.getElementById("address").value = this.cells[3].innerHTML;
                                        document.getElementById("product").value = this.cells[4].innerHTML;
                                        document.getElementById("amount").value = this.cells[5].innerHTML;
                                        document.getElementById("incentive").value = this.cells[6].innerHTML;
                                    };
                                }
                            </script>
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


<?php
include "sessionCon.php";
if (isset($_POST['update'])) {
    $name = $_POST['id'];
    mysqli_query($conn, "update `sellers` set completename='$_POST[completename]',age='$_POST[age]',address='$_POST[address]',product='$_POST[product]',amount='$_POST[amount]',incentive='$_POST[incentive]' where id=$name");
?>
    <script>
        window.location = "sellers.php";
    </script>
<?php
}
?>



<?php
include "sessionCon.php";
if (isset($_POST['add'])) {
    mysqli_query($conn, "INSERT INTO `sellers` (`id`, `completename`, `age`, `address`, `product`, `amount`, `incentive`) values(NULL,'$_POST[completename2]','$_POST[age2]','$_POST[address2]','$_POST[product2]','$_POST[amount2]','$_POST[incentive2]')");
    echo '<script>alert("Seller inserted")</script>';
?>
    <script>
        window.location = "Sellers.php";
    </script>
<?php
}
?>


