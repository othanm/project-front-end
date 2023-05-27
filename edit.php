<?php

@include 'config.php';
$id = $_GET['id'];


if(isset($_POST['submit'])){
   $name =$_POST['name'];
   $email = $_POST['email'];
   $pass = $_POST['password'];
   $user_type = $_POST['user_type'];

   $sql = " UPDATE user_form SET id= $id , name= '$name' , email = '$email', password = '$pass' ,  user_type= '$user_type'
   WHERE id=$id ";

   $result = mysqli_query($conn,  $sql);

   if($result){
    echo "updated succesfully";
   }else{
    die(mysqli_error($conn));
    
}};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update form</title>

    <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="form-container">

   <form action="" method="post">
      <h3>update now</h3>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="update now" class="form-btn">
      
   </form>

</div>

    
</body>
</html>