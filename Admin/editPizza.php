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
            
              $row = $model->editPizza($id);
           
              if (isset($_POST['update'])) {
                if (isset($_POST['Titulli']) && isset($_POST['Pershkrimi']) && isset($_POST['Cmimi']) && isset($_FILES["uploadfile"]["name"]) ) {
                     
                    $data['Id'] = $id;
                    $data['Titulli'] = $_POST['Titulli'];
                    $data['Pershkrimi'] = $_POST['Pershkrimi'];
                    $data['Cmimi'] = $_POST['Cmimi'];
                    $data['Img'] = $_FILES["uploadfile"]["name"];

 
                    $update = $model->updatePizza($data);

                    if($update){
                      echo "<script>alert('Pizza updated successfully');</script>";
                      echo "<script>window.location.href = 'index.php';</script>";
                    }
                    else{
                        echo 'Failed!!';
                      echo "<script>alert('record update failed');</script>";
                      echo "<script>window.location.href = 'index.php';</script>";
                    }
 
                  }else{
                    echo 'Failed!!';
                    echo "<script>alert('empty');</script>";
                    header("Location: editPizza.php?id=$id");
                  }
                }
                echo $row['Titulli']
          ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Titulli</label>
                        <input type="text" name="Titulli" value="<?php echo $row['Titulli']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Pershkrimi</label>
                        <input type="text" name="Pershkrimi" value="<?php echo $row['Pershkrimi']; ?>"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Cmimi</label>
                        <input type="number" name="Cmimi" value="<?php echo $row['Cmimi']; ?>" id=""
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Image: </label><br>
                        <img style="width:30%" src="../img/<?php echo $row['Img']; ?>" alt=""><br>
                        <input class="form-control" type="file" name="uploadfile" value="pizza1.png" />

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