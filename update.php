<?php

include("connect.php");
include("util.php");
    $fusername = $_GET['id'];
    $select = "SELECT * FROM ACCOUNTS WHERE USERNAME = '$fusername'";
    $result = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($result);
    $email = $row['EMAIL'];
    $password = $row['PASSWORD'];

    echo"
    <form action='' method='POST' >
    <table>
    <tr>
        <td>USERNAME:</td>
        <td><input type='text' name='username' value = '{$fusername}'></td>
    </tr>
    <tr>
        <td>EMAIL:</td>
        <td><input type='email' name='email' value = '{$email}'></td>
    </tr>
    <tr>
        <td>PASSWORD:</td>
        <td><input type='password' name='password' value = '{$password}'></td>
    </tr>
    </table>
    <button type='submit' name='submit'>UPDATE</button>

    </form>";
    
    if(isset($_POST["submit"])){
        $susername = $_POST["username"];
        $email=$_POST["email"];
        $password=$_POST["password"];

         if(  $susername == NULL ||$email == NULL || $password == NULL){
            message("please fill all the boxes");
             exit();
        }
        $update = "UPDATE ACCOUNTS
                    SET USERNAME = '$susername', EMAIL = '$email' , PASSWORD = '$password'
                    WHERE USERNAME = '$fusername'";
         mysqli_query($conn,$update);
         mysqli_close($conn);
         header("location: home.php");
    }

?>