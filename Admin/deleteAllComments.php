<?php 
    include '../DB/DB-CON.php';
    $model = new Model();
 
    $delete = $model->deleteAllComments();
 
    if ($delete) {
        echo "<script>alert('All Messages are deleted');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    }
 ?>