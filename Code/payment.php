<!DOCTYPE html>
<html lang="en">
<head>
    <title>reciever</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>body {
    background-image: url("background.jpg");
    background-size: cover;
    height: 100%;
    width: 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    }</style>
</head>
<body>
<?php  
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "bank_db";
    // Create a database connection
    $con = mysqli_connect($server, $username, $password, $database);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $sender = $_POST['sender'];
        $rec = $_POST['rec'];
        $amount = $_POST['amount'];
    }
     $sql3 ="SELECT balance FROM customer where Name='$sender';";
     $sql = "UPDATE customer SET balance=(balance-$amount) where Name='$sender';";
     $sql1 = "UPDATE customer SET balance=(balance+$amount) where Name='$rec';";
     $sql2 = "INSERT INTO history (sender,reciever,amount)VALUES('$sender','$rec',$amount)";
        $result3=mysqli_query($con,$sql3);
    while($row3 = mysqli_fetch_array($result3)){
        if($amount>$row3["balance"]){
            echo "<script> alert('Insufficient Balance')</script>";
            echo "<script> window.location.href='customer.php'</script>";
        }
        else{
            $result=mysqli_query($con,$sql);
            $result1=mysqli_query($con,$sql1);
            $result2=mysqli_query($con,$sql2);
            echo "<script> alert('Transaction Successful...')</script>";
            echo "<script> window.location.href='index.php'</script>";
        }
    }
?>
</body>
<footer id="footer">
<nav id="navbar" >
<div class="center">
  <p> Stay Connected: Follow us on social media for news and updates </p>
  <i class="social-icon fas fa-phone-square-alt"></i>
  <i class="social-icon fab fa-twitter-square"></i>
  <i class="social-icon fas fa-envelope-square"></i>
</div>
</nav>
</footer>
</html>