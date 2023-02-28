<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <title>PHP Mysql OOP CRUD (Create, Read, Update and Delete)</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center">PHP Mysql OOP CRUD (Create, Read, Update and Delete)</h1>
                <hr style="height: 1px;color: black;background-color: black;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mx-auto">
                <?php
              include '../DB/DB-CON.php';

              $model = new Model();
              $id = $_REQUEST['id'];
            
              $row = $model->editUser($id);
           
              if (isset($_POST['update'])) {
                if (isset($_POST['EmriMbiemri']) && isset($_POST['Email']) && isset($_POST['Adresa']) && isset($_POST['NrTel']) && isset($_POST['Password']) && isset($_POST['Role'])) {
                     
                    $data['Id'] = $id;
                    $data['EmriMbiemri'] = $_POST['EmriMbiemri'];
                    $data['Email'] = $_POST['Email'];
                    $data['Adresa'] = $_POST['Adresa'];
                    $data['NrTel'] = $_POST['NrTel'];
                    $data['Password'] = $_POST['Password'];
                    $data['Role'] = $_POST['Role'];
 
                    $update = $model->updateUser($data);

                    if($update){
                      echo "<script>alert('record update successfully');</script>";
                      echo "<script>window.location.href = 'index.php';</script>";
                    }else{
                      echo "<script>alert('record update failed');</script>";
                      echo "<script>window.location.href = 'index.php';</script>";
                    }
 
                  }else{
                    echo "<script>alert('empty');</script>";
                    header("Location: editUsers.php?id=$id");
                  }
                }
          ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Emri dhe Mbiemri</label>
                        <input type="text" name="EmriMbiemri" value="<?php echo $row['EmriMbiemri']; ?>"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="Email" value="<?php echo $row['Email']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" name="Adresa" value="<?php echo $row['Adresa']; ?>" id=""
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">NrTel</label>
                        <input type="number" name="NrTel" value="<?php echo $row['NrTel']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="Password" value="<?php echo $row['Password']; ?>" id=""
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Role</label>
                        <input type="text" name="Role" value="<?php echo $row['Role']; ?>" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="update" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>