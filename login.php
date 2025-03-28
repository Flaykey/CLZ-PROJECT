<?php
if (isset($_POST["login"])) {
    $form_username = $_POST["username"];
    $form_password = $_POST["password"];
    
    $select_username = "SELECT * FROM ACCOUNTS WHERE USERNAME = '$form_username'";
    $username_result = mysqli_query($conn,$select_username);

    if($form_username == "" ||$form_password == ""  ){
        message("All the fields are not properly filled");
        exit();
        
    }
    if($username_result->num_rows > 0){
        $row = $username_result->fetch_assoc();
        if($form_username == $row['USERNAME']  && $form_password == $row['PASSWORD']){
            message("SUccesfully loged in");
            mysqli_close($conn);
            header("location: home.php");
        }else{
            message("incorrect password");
        }
        
    }else{
        message(" Account does not exist");
    }
    mysqli_close($conn);
}

?>