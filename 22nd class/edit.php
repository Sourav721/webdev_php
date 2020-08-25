<?php 
include 'connect.php';
?>
<?php 
if(isset($_POST['update'])){
    $id=mysqli_escape_string($conn,$_POST['uid']);
    $email=mysqli_escape_string($conn,$_POST['email']);
    $password=mysqli_escape_string($conn,md5($_POST['password']));
    $dob = mysqli_escape_string($conn,$_POST['date']);
    $sql="UPDATE user SET email='$email',password='$password',dob='$dob' WHERE id=$id";
    $query=mysqli_query($conn,$sql);
    if($query){
        header('location:select.php');
    }
    else{// http_response_code(500);
        echo "somethig rong".mysqli_error($conn);}
}

?>

<?php

$id="";
$email="";
$password="";
$dob="";

if(isset($_GET['id'])){
    $sql="SELECT * FROM user where id=".$_GET['id'];
    $query=mysqli_query($conn,$sql);
    if($query){
        if(mysqli_num_rows($query)>0){
            while($row=mysqli_fetch_assoc($query)){
                    $id=$row['id'];
                    $email=$row['email'];
                    $password=$row['password'];
                    $dob=$row['dob'];
            }
        }
    }
}





?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>form</h1>
<form method ="POST" action="edit.php">
	
	<label for="E">Email:</label><br>
	<input type="email" id="E" value="<?=$email?>" placeholder="eamil" name="email"/><br>
    <input type="hidden" id="uid" value="<?=$id?>" name="uid"/><br>
	<label for="p">password:</label><br>
	<input type="password"id="p" value="<?=$password?>" placeholder="pass" name="password" />
	<br><br>
    <label for="d">date of birth:</label><br>
	<input type="date"id="d" value="<?=$dob?>" name="date" />
<br><br>
	<input type="submit" value="update" name ="update" />

	</form>
</body>
</html>