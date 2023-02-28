<?php
    class Model{
        private $server = 'localhost';
        private $username = 'root';
        private $password;
        private $database = 'PizzaProject';
        private $conn;

        public function __construct(){
            try{
                $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
            }catch(Exception $ex){
                echo 'connection failed' .$ex->getMessage();
            }       
        }

        //INSERT, FETCH, EDIT, DELETE

        public function insert(){
            if(isset($_POST['submit'])){

                $namesurname = $_POST['EmriMbiemri'];//blerina
                $email = $_POST['Email']; //blerina@ubt
                $address = $_POST['Adresa'];
                $mobile = $_POST['NrTel'];
                $password = $_POST['Password'];
                $role = $_POST['Role'];     
                

                $query = "INSERT INTO Users(EmriMbiemri, Email, Adresa, NrTel,Password,Role) VALUES ('$namesurname','$email', '$mobile', '$address','$password','$role')";
                if ($sql = $this->conn->query($query)) {
                    echo "<script>alert('records added successfully');</script>";
                    echo "<script>window.location.href = 'index.php';</script>";
                }else{
                    echo "<script>alert('failed');</script>";
                    echo "<script>window.location.href = 'index.php';</script>";
                }
            }
        }
       
            // ...
        
            public function getConn() {
                return $this->conn;
            }
  
        
        //Inserto Pizza
        public function insertPizza(){
            if(isset($_POST['submit'])){
                $titulli = $_POST['titulli'];
                $pershkrimi = $_POST['pershkrimi'];
                $cmimi = $_POST['cmimi'];
                $img = $_FILES["uploadfile"]["name"];
        var_dump($img);


                $query = "INSERT INTO pizzas(Titulli, Pershkrimi, Cmimi, Img) VALUES ('$titulli','$pershkrimi', '$cmimi', '$img')";
                if ($sql = $this->conn->query($query)) {
                    echo "<script>alert('records added successfully');</script>";
                    echo "<script>window.location.href = 'index.php';</script>";
                } else {
                    echo "<script>alert('failed');</script>";
                    echo "<script>window.location.href = 'index.php';</script>";
                }
            }
        }
        public function insertComments(){
            if(isset($_POST['submit'])){

                $emri = $_POST['Emri'];
                $mbiemri = $_POST['Mbiemri']; 
                $mesazhi = $_POST['Mesazhi'];
       

                $query = "INSERT INTO comments(Emri,Mbiemri,Mesazhi) VALUES ('$emri','$mbiemri', '$mesazhi')";
                if ($sql = $this->conn->query($query)) {
                    echo "<script>alert('Message sent!');</script>";
                    echo "<script>window.location.href = 'index.php';</script>";
                }else{
                    echo "<script>alert('failed');</script>";
                    // echo "<script>window.location.href = 'index.php';</script>";
                }
            }
        }
        

        
        public function fetch(){
            $data = null;
            $query = "SELECT * FROM users";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
            return $data;
        }
        public function fetchPizza(){
            $data = null;
            $query = "SELECT * FROM pizzas";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
            return $data;
        }
        public function fetchComments(){
            $data = null;
            $query = "SELECT * FROM comments";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
            return $data;
        }

 
        public function deleteUser($id){
 
            $query = "DELETE FROM users where Id = '$id'";
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
 public function deleteAllComments(){
    
$query = "DELETE FROM comments";

if ($sql = $this->conn->query($query)) {
  return true;
} else {
    return false;

}

 }
        public function editUser($id){
 
            $data = null;
 
            $query = "SELECT * FROM users WHERE Id = '$id'";
            if ($sql = $this->conn->query($query)) {
                while($row = $sql->fetch_assoc()){
                    $data = $row;
                }
            }
            return $data;
        }
 
        public function updateUser($data){
 
            $query = "UPDATE users SET EmriMbiemri='$data[EmriMbiemri]', Email='$data[Email]', Adresa='$data[Adresa]', NrTel='$data[NrTel]',Password='$data[Password]',Role='$data[Role]' WHERE Id='$data[Id] '";
 
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
        public function deletePizza($id){
 
            $query = "DELETE FROM pizzas where Id = '$id'";
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
 
        public function editPizza($id){
 
            $data = null;
 
            $query = "SELECT * FROM pizzas WHERE Id = '$id'";
            if ($sql = $this->conn->query($query)) {
                while($row = $sql->fetch_assoc()){
                    $data = $row;
                }
            }
            return $data;
            echo $data;
        }
 
        public function updatePizza($data){
 echo $data;
            $query = "UPDATE pizzas SET Titulli='$data[Titulli]', Pershkrimi='$data[Pershkrimi]', Cmimi='$data[Cmimi]', Img='$data[Img]' WHERE Id='$data[Id]'";

            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
        //Show Product 
        public function ShowProduct($id){
     
            $data = null;
    
            $query = "SELECT * FROM pizzas WHERE Id = '$id'";
            if ($sql = $this->conn->query($query)) {
                while($row = $sql->fetch_assoc()){
                    $data = $row;
                }
            }
            return $data;
            echo $data;
        }
        // INSERT INTO Orders table
        public function insertOrders($id){
            if(isset($_POST['submit'])){
                $user_id = $_SESSION['auth_user']['user_id'];
                $pizza_id = $id;
                $quantity = $_POST['quantity'];
                $total_price = $_POST['Cmimi'] * $quantity;
                $order_date = date('Y-m-d H:i:s');


                $query = "INSERT INTO orders(user_id , pizza_id , quantity, total_price,order_date) VALUES ('$user_id','$pizza_id', '$quantity', '$total_price','$order_date')";
                if ($sql = $this->conn->query($query)) {
                    echo "<script>alert('Pizza Added to your cart!');</script>";
                    // echo "<script>window.location.href = 'index.php';</script>";
                } else {
                    echo "<script>alert('failed');</script>";
                    echo "<script>window.location.href = 'index.php';</script>";
                }
            }
        }
        // Show the Orders by User ID



        public function showOrdersWithDetails($userId) {
            $query = "SELECT orders.order_id, orders.order_date, orders.quantity, orders.total_price, pizzas.Titulli, pizzas.Cmimi, pizzas.Img FROM orders INNER JOIN pizzas ON orders.pizza_id = pizzas.Id WHERE orders.user_id = $userId;
            ";
            $result = $this->conn->query($query);
            $orders = [];
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $orders[] = $row;
                }
            }
            return $orders;
        }
        
// Delete the Order
public function deleteOrder($order_id){
    $query = "DELETE FROM orders WHERE order_id = $order_id";
    if ($this->conn->query($query)) {
       return true;
    } else {
return false;
    }
}

// Show the orders on Admin Panel
public function showOrdersAdmin() {
    $query = "SELECT orders.*, pizzas.*, users.EmriMbiemri 
    FROM orders INNER JOIN pizzas
     ON orders.pizza_id = pizzas.Id INNER JOIN users
      ON orders.user_id = users.Id;";
    $result = $this->conn->query($query);
    $rows = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }

    return $rows;
}




        
    }

?>