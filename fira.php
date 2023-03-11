<!DOCTYPE html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="acrs";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("error");

}
$name=$_POST['name'];
$fname=$_POST['fname'];
$aadhar=$_POST['aadhar'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$complaint=$_POST['complaint'];
$reg=rand(999999999,9999999999);
$sql="INSERT INTO `aregistration` (`name`,`fname`,`aadhar`,`address`,`pincode`,`email`,`phone`,`complaint`,`reference`) VALUES ('$name','$fname','$aadhar','$address','$pincode','$email','$phone','$complaint','$reg')";
if($conn->query($sql)==true){
    echo "yes";
}
else {
    echo "no";
}
// $conn->close();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;600&family=Square+Peg&display=swap" rel="stylesheet">
    <title>Registration Done</title>
    <style>
        *{
            margin:0px;
            padding:0px;
            font-family:'Montserrat', sans-serif;
        }
        body{
            background-color:#080c24;
            height:100vh;
            width:100vw;
        }
        .in{
            display:flex;
            justify-content:space-evenly;
            align-items:center;
            flex-direction:column;
            border:1px solid rgba(255, 255, 255, 0.2);
            height:30%;
            width:40%;
            margin-left:auto;
            margin-right:auto;
            border-radius:8px;
            background-color: rgba(255, 255, 255, 0.2);
            box-shadow:4px 4px 12px rgba(0, 0, 0, 0.5);

        }
        .reg,.ref{
            font-family:'Montserrat', sans-serif;
            font-weight:600;
            font-size:3vh;
            color:white;
        }
        .reg{
            color:#3EC70B;
        }
        .home{
            font-size: 1.8vh;
            font-weight: 600;
            text-decoration: none;
            color:black;
        }
    </style>
</head>
<body>
    <div class="in">
    <p class="reg"> FIR Registration Done Successfully</p>
    <p class="ref">Reference ID:<?php echo($reg) ?></p>
    <a class="home" href="index.html">Go To Home Page</a>
    </div>
</body>
</html>