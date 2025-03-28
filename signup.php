<?php
    if (isset($_POST["signup"])) {
    $form_username = $_POST["username"];
    $form_email =    $_POST["email"];
    $form_password = $_POST["password"];
    
    $select_username = "SELECT * FROM ACCOUNTS WHERE USERNAME = '$form_username'";
    $username_result = mysqli_query($conn,$select_username);
    $select_email = "SELECT * FROM ACCOUNTS WHERE EMAIL = '$form_email'";
    $email_result = mysqli_query($conn,$select_email);
    
    if($form_email == "" ||$form_username == "" ||$form_password == ""  ){
        message("All the fields are not properly filled");
        exit();
        
    }
    if($username_result->num_rows > 0){
        message("Username Already exist");
        exit();
    }
    if($email_result->num_rows > 0){
        message("An Account with this email already exist");
        exit();
    }
    $insert_table = "INSERT INTO ACCOUNTS (USERNAME, EMAIL, PASSWORD) 
                     VALUES ('$form_username', '$form_email', '$form_password')";

if (!mysqli_query($conn, $insert_table)) {
    die("Could not insert values into table: " . mysqli_error($conn));
    }
    mysqli_close($conn);
}

?>
