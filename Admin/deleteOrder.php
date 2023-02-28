<?php 
    include '../DB/DB-CON.php';
    $model = new Model();
    $id = $_REQUEST['id'];
    $delete = $model->deleteOrder($id);
 
    if ($delete) {
        echo "<script>alert('delete successfully');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    }
 ?>