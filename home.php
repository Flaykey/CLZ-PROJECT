<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Home</title>
</head>
<style>
    *{
        padding :0px;
        margin :0px;
    }
    html,body{
        width: 100%;
        height: 100%;
        background-color: rgb(236, 200, 101);;
    }
    header{
    background-color: black;
    color: white;
    padding: 5px;
    font-size: 32px;
}
header a{
    text-decoration: none;
    color: white;
}
.delete{
    background-color: rgb(207, 57, 46);
    border-style: none;
    width: 50px;
    height: 50px;
    border-radius: 5px;

}
.update{
    background-color: rgb(50, 218, 101);
    border-style: none;
    width: 50px;
    height: 50px;
    border-radius: 5px;

}
</style>
<body>
    <header> <a href="index.php"> LOGIN</a></header>
    <table style="width: 50%; margin-top:20px; text-align : center;">
    <tr>
        <th >USERNAME</th>
        <th>EMAIL</th>
        <th>PASSWORDS</th>
    </tr>
    <a href=""></a>
        <?php
include("connect.php");
mysqli_select_db($conn,"ACCOUNT");

$select_sql = "SELECT * FROM ACCOUNTS";
$records = mysqli_query($conn,$select_sql);

if ($records) {
    while ($row = mysqli_fetch_assoc($records)) {
        echo "<tr>
        <td> {$row['USERNAME'] } </td>
        <td> {$row['EMAIL'] }</td>
        <td> {$row['PASSWORD'] }</td>
        <td><a href='update.php?id={$row['USERNAME']}'><button class='update' type='submit' name='update'>Update</button></a></td>
        <td><a href='delete.php?id={$row['USERNAME']}'><button class='delete' type='submit' name='delete'>Delete</button></a> </td>
        </form> </tr>" ;
    }
}

if(isset($_POST["update"])){
    header("location: update.php");
}
if(isset($_POST["delete"])){
    include("delete.php");
}
?>
</table>
</body>
</html>