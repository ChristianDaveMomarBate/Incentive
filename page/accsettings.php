<?php include 'index.php';
?>



<?php
include "sessionCon.php";
$sql = "Select * from `user`";
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
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Account setting</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" type="hidden" name="id" id="id">
                                    <input class="form-control" placeholder="Username" type="text" name="username" id="username">
                                    <input class="form-control" placeholder="Emial" type="text" name="email" id="email">
                                    <input class="form-control" placeholder="Mobilenumber" type="text" name="mobilenumber" id="mobilenumber">
                                    <input class="form-control" placeholder="Product" type="password" name="password" id="password">
                                    <input class="form-control" placeholder="Completename" type="text" name="completename" id="completename">
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
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Purchase Information
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <p></p>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Mobile number</th>
                                            <th>Password</th>
                                            <th>Position</th>
                                            <th>Complete name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($result) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $id = $row['id'];
                                                $username = $row['user_name'];
                                                $email = $row['email'];
                                                $mobilenumber = $row['mobilenumber'];
                                                $password = $row['password'];
                                                $position = $row['position'];
                                                $completename = $row['completename'];
                                                echo
                                                '<tr>
                                                            <th scope="row">' . $id . '</th>
															<td>' . $username . '</td>
                                                            <td>' . $email . '</td>
															<td>' . $mobilenumber . '</td>
                                                            <td>' . $password . '</td>
															<td>' . $position . '</td>
                                                            <td>' . $completename . ' </td>
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
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>