<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "ACCOUNT";
// Connect to MySQL server
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Couldn't connect to server: " . mysqli_connect_error());
}
mysqli_select_db($conn,$database);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // retrieve from database
    
    // Retrieve form inputs
    $form_username = $_POST["username"];
    $form_password = $_POST["password"];
    
    $select_username = "SELECT * FROM ACCOUNTS WHERE USERNAME = '$form_username'";
    $username_result = mysqli_query($conn,$select_username);

    if($form_username == "" ||$form_password == ""  ){
        echo "All the fields are not properly filled";
        exit();

    }
    if($username_result->num_rows > 0){
        $row = $username_result->fetch_assoc();
        if($form_username == $row['USERNAME']  && $form_password == $row['PASSWORD']){
            echo"SUccesfully loged in";
        }else{
            echo"incorrect password";
        }

    }else{
        echo" Account does not exist";
    }

}

mysqli_close($conn);

?>