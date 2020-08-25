
<?php
include_once 'connect.php';


if(isset($_POST['submit'])){
    $email=mysqli_escape_string($conn,$_POST['email']);
    $password=mysqli_escape_string($conn,md5($_POST['password']));
    $dob = mysqli_escape_string($conn,$_POST['date']);

    $sql = "INSERT INTO user(email,password,dob) VALUES ('$email','$password','$dob')";

    $query =mysqli_query($conn,$sql);
    if($query){
        header('location:select.php');
        http_response_code(200);
        echo "succesful";

    }
    else{
       // http_response_code(500);
        echo "somethig rong".mysqli_error($conn);
    }
}
// else{
//   //  http_response_code(403);
//     echo "problem with your submission";
// }
include_once 'signup.php';
?>



