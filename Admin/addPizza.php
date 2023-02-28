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
                <h1 class="text-center">Add a new Pizza</h1>
                <hr style="height: 1px;color: black;background-color: black;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mx-auto">
                <?php
              include '../DB/DB-CON.php';
              $model = new Model();
              $insert = $model->insertPizza();
          ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class=" form-group">
                        <label for="">Titulli</label>
                        <input type="text" name="titulli" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Pershkrimi</label>
                        <input type="text" name="pershkrimi" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Cmimi</label>
                        <input type="number" name="cmimi" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="file">Select a file to upload:</label>
                        <input class="form-control" type="file" name="uploadfile" value="" />

                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>