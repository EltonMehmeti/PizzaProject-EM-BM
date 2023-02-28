<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/jpg" href="../img/icon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <title>Add Pizzas</title>
</head>

<body>


    <div class="container d-flex flex-column">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center">Add Users and Admins</h1>
                <hr style="height: 1px;color: black;background-color: black;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"><a href="/PizzaProject-EM-BM/Admin/addUser.php" class="btn btn-primary">Add
                    User</a>

                <br><br>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Adresa</th>
                            <th>Nr Tel</th>
                            <th>Password</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
 
 include '../DB/DB-CON.php';
 $model = new Model();
 $rows = $model->fetch();
 $i = 1;
 if(!empty($rows)){
     foreach($rows as $row){ 
         ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['EmriMbiemri']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Adresa']; ?></td>
                            <td style=""><?php echo $row['NrTel']; ?></td>
                            <td><?php echo $row['Password']; ?></td>
                            <td><?php echo $row['Role']; ?></td>
                            <td>
                                <a href="deleteUser.php?id=<?php echo $row['Id']; ?>"
                                    class="badge badge-danger">Delete</a>
                                <a href="editUsers.php?id=<?php echo $row['Id']; ?>"
                                    class="badge badge-success">Edit</a>
                            </td>
                        </tr>

                        <?php
                }
            }else{
                echo "no data";
            }
            ?>

                    </tbody>
                </table>
                <br>
                <!-- Orders -->
                <!-- ---------------------------------- -->
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <h1 class="text-center">All Orders</h1>
                        <hr style="height: 1px; color: black;background-color:black;">

                    </div>

                    <!-- <a href="/PizzaProject-EM-BM/Admin/addPizza.php" class="btn btn-primary">Add Pizza</a> -->
                    <br>
                    <br>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User's Name</th>
                                <th>Pizza</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Image</th>
                                <th>Order Date</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
 
 
 $modelOrders = new Model();
 $rowsOrders = $modelOrders->showOrdersAdmin();
 $j = 1;
 if(!empty($rowsOrders)){
     foreach($rowsOrders as $row){ 
         ?>
                            <tr>
                                <td><?php echo $j++; ?></td>
                                <td><?php echo $row['EmriMbiemri']; ?></td>
                                <td><?php echo $row['Titulli']; ?></td>
                                <td><?php echo $row['quantity']; ?></td>
                                <td><?php echo $row['total_price']; ?></td>
                                <td style="width: 200px;"><img style="width:70%" src="../img/<?php echo $row['Img']; ?>"
                                        alt=""></td>
                                <td><?php echo $row['order_date']; ?></td>


                                <td>
                                    <a href="deleteOrder.php?id=<?php echo $row['Id']; ?>"
                                        class="badge badge-danger">Delete</a>

                                </td>
                            </tr>

                            <?php
                }
            }else{
                echo "no data";
            }
            ?>
                        </tbody>
                    </table>

                </div>

                <!-- ---------------------------------- -->
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <h1 class="text-center">Add
                            New
                            Pizzas</h1>
                        <hr style="height: 1px; color: black;background-color:black;">

                    </div>
                </div>
                <a href="/PizzaProject-EM-BM/Admin/addPizza.php" class="btn btn-primary">Add Pizza</a>
                <br>
                <br>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titulli</th>
                            <th>Pershkrimi</th>
                            <th>Cmimi</th>
                            <th>Image</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
 
 
 $modelPizza = new Model();
 $rowsPizza = $modelPizza->fetchPizza();
 $j = 1;
 if(!empty($rowsPizza)){
     foreach($rowsPizza as $row){ 
         ?>
                        <tr>
                            <td><?php echo $j++; ?></td>
                            <td><?php echo $row['Titulli']; ?></td>
                            <td><?php echo $row['Pershkrimi']; ?></td>
                            <td><?php echo $row['Cmimi']; ?> $</td>
                            <td style="width: 200px;"><img style="width:70%" src="../img/<?php echo $row['Img']; ?>"
                                    alt="">
                            </td>

                            <td>
                                <a href="deletePizza.php?id=<?php echo $row['Id']; ?>"
                                    class="badge badge-danger">Delete</a>
                                <a href="editPizza.php?id=<?php echo $row['Id']; ?>"
                                    class="badge badge-success">Edit</a>
                            </td>
                        </tr>

                        <?php
                }
            }else{
                echo "no data";
            }
            ?>
                    </tbody>
                </table>



                <!-- -------------------------------- -->

                <div class="row">
                    <div class="col-md-12 mt-5">
                        <h1 style="text-align: center;">Comments from Clients</h1>
                        <hr style="height: 1px; color: black;background-color:black;">
                        <a href="deleteAllComments.php" class="btn btn-danger">Delete All Messages</a>
                    </div>
                </div>

                <br>
                <br>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Emri</th>
                            <th>Mbiemri</th>
                            <th>Mesazhi</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
 
 
 $modelPizza = new Model();
 $rowsPizza = $modelPizza->fetchComments();
 $k = 1;
 if(!empty($rowsPizza)){
     foreach($rowsPizza as $row){ 
         ?>
                        <tr>
                            <td><?php echo $k++; ?></td>
                            <td><?php echo $row['Emri']; ?></td>
                            <td><?php echo $row['Mbiemri']; ?></td>
                            <td><?php echo $row['Mesazhi']; ?> </td>

                        </tr>

                        <?php
                }
            }else{
                echo "no data";
            }
            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

</body>

</html>