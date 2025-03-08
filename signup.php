<?php
$servername = "localhost";
$username = "root";
$password = "";

// Connect to MySQL server
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Couldn't connect to server: " . mysqli_connect_error());
}

// Create database
$database = "CREATE DATABASE IF NOT EXISTS ACCOUNT";
if (!mysqli_query($conn, $database)) {
    die("Database not created: " . mysqli_error($conn));
}

// Select the database
mysqli_select_db($conn, "ACCOUNT");

// Create table
$create_table = "CREATE TABLE IF NOT EXISTS ACCOUNTS (
    USERNAME VARCHAR(255) NOT NULL,
    EMAIL VARCHAR(255) NOT NULL,
    PASSWORD VARCHAR(255) NOT NULL
)";

if (!mysqli_query($conn, $create_table)) {
    die("Error creating table: " . mysqli_error($conn));
}


// Check if form data is set before accessing it
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // retrieve from database
    
    // Retrieve form inputs
    $form_username = $_POST["username"];
    $form_email =    $_POST["email"];
    $form_password = $_POST["password"];
    
    $select_username = "SELECT * FROM ACCOUNTS WHERE USERNAME = '$form_username'";
    $username_result = mysqli_query($conn,$select_username);
    $select_email = "SELECT * FROM ACCOUNTS WHERE EMAIL = '$form_email'";
    $email_result = mysqli_query($conn,$select_email);

    if($form_email == "" ||$form_username == "" ||$form_password == ""  ){
        echo "All the fields are not properly filled";
        exit();

    }
    if($username_result->num_rows > 0){
        echo "Username Already exist";
        exit();
    }
    if($email_result->num_rows > 0){
        echo "An Account with this email already exist";
        exit();
    }
    // Insert data into the table
    $insert_table = "INSERT INTO ACCOUNTS (USERNAME, EMAIL, PASSWORD) 
                     VALUES ('$form_username', '$form_email', '$form_password')";

    if (!mysqli_query($conn, $insert_table)) {
        die("Could not insert values into table: " . mysqli_error($conn));
    } else {
        echo "Record inserted successfully!";
    }
}

mysqli_close($conn);
header('location: index.html');
exit();
?>
