<?Php 

$server_name = "localhost";
$user_name = "root";
$password ="";
$db_name ="crud_db";

$conn =mysqli_connect($server_name,$user_name,$password);
if(!$conn){
    die("connection failed".mysqli_connect_error());
}
$sql = "Create DATABASE $db_name";
$query = mysqli_query($conn,$sql);
if($query){
    echo "DATEBASE CREATE SUCCESSFULY";
}
else{
    "FAILED".mysqli_error($conn);

}

mysqli_close($conn);


?>