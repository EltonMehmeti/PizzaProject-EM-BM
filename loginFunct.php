<?php
// require_once './DB/DB-CON.php';
session_start();
$model = new Model();
if(isset($_POST['login_button']))
{
    $Email = mysqli_real_escape_string($model->getConn(), $_POST['Email']);
    $password = mysqli_real_escape_string($model->getConn(), $_POST['Password']);

    $login_query = "SELECT * FROM users WHERE Email='$Email' AND password='$password' LIMIT 1";
    $login_query_run = mysqli_query($model->getConn(), $login_query);

    if(mysqli_num_rows($login_query_run) > 0 )
    {
        echo 'Hello';
        foreach($login_query_run as $data){
            $user_id=$data['Id'];
            $user_name=$data['Email'];
            $role_type=$data['Role'];

        }
        $_SESSION['auth'] = true;
        $_SESSION['auth_role'] = "$role_type";

        $_SESSION['auth_user'] = [
            'user_id'=>$user_id,
            'user_name'=>$user_name

        ];
        if($_SESSION['auth_role'] == 'Admin')
        {
            header("Location: Admin/index.php");
            exit(0);
        }
        elseif($_SESSION['auth_role'] == 'User')
        {
            header("Location: index.php?id=$user_id");
exit(0);
}
}
else
{
echo 'Unsuccessfully';
header("Location: Login-Register.php");
exit(0);
}
}
// else
// {
// echo 'Hello';
// header("Location: index.php");
// exit(0);
// }

?>