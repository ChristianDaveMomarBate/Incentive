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
                    <button class="sbt wt" name="purchase">Purchase</button>
                    <p></p>
                </div>
                <input type="hidden" class="form-control" name="id" id="id">
                <input type="text" class="form-control" placeholder="Quantity" name="quantity" id="quantity" required>
                <input type="text" class="form-control"name="buyername" readonly value="<?php echo ($name); ?>">
                <input type="text" class="form-control" placeholder="Seller name" name="seller" id="seller" readonly>
                <input type="text" class="form-control" placeholder="Product" name="product" id="product" readonly>
                <input type="text" class="form-control" placeholder="Amount" name="amount" id="amount" readonly>
                <input type="text" class="form-control" placeholder="Incentive Percentage" id="incentive" name="incentive" readonly>
                <p></p>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
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
                        <th>Seller name</th>
                        <th>Product</th>
                        <th>Amount</th>
                        <th>Incentive percentive</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $completename = $row['completename'];
                            $product = $row['product'];
                            $amount = $row['amount'];
                            $incentive = $row['incentive'];
                            echo
                            '<tr>
                                                            <th scope="row">' . $id . '</th>
															<td>' . $completename . '</td>
                                                            <td>' . $product . '</td>
															<td>' . $amount . '</td>
                                                            <td>' . $incentive . ' </td>
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
                        document.getElementById("seller").value = this.cells[1].innerHTML;
                        document.getElementById("product").value = this.cells[2].innerHTML;
                        document.getElementById("amount").value = this.cells[3].innerHTML;
                        document.getElementById("incentive").value = this.cells[4].innerHTML;
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
if (isset($_POST['purchase'])) {
    $subtotal = 0;
    $qty = $_POST['quantity'];
    $amount = $_POST['amount'];
    $total = $qty * $amount + $subtotal;

    $date = date('d-m-y h:i:s');
    
    mysqli_query($conn, "INSERT INTO `sales` (`id`, `quantity`, `total`, `buyername`, `seller`, `product`, `amount`, `incentive`, `date`) values(NULL,'$qty','$total','$_POST[buyername]','$_POST[seller]','$_POST[product]','$amount','$_POST[incentive]','$date')");
    echo '<script>alert("Purchase Succesfully")</script>';
?>
    <script>
        window.location = "customerpurchase.php";
    </script>
<?php
}
?>



