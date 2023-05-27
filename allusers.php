<!-- <?php 
@include 'config.php';

$q="select * from user_form";
$res = mysqli_query($conn,$q);

if($res->num_rows>0){
    echo "<table border = '1'>" ;
    echo "<tr><th>id</th>  <th>name</th>  <th>email</th>  <th>user type</th> <th>operation</th></tr>";
    while($user_form=$res->fetch_assoc()){ 
    echo "<tr> <td>". $user_form['id']."</td>
       <td>". $user_form['name']."</td>
         <td>". $user_form['email']."</td>
         
           <td>". $user_form['user_type']."</td>
         
           <td>
          <button> <a class='btn' href='/edite.php?id=$user_form[id]'>Edite</a> </button>
          <button> <a class='btn' href='/delete.php?id=$user_form[id]'>Delete</a> </button>
           </td>
           </tr>"; } 
    
           echo "</table>";
 
}else { echo "zero output" ; 
  
}

?>

 -->

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
     rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
     crossorigin="anonymous">

    <!--font-awesome-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
            

  <title>Manage Users</title>
</head>
<body>


<div class="container">
  
  <a href="Register_form.php" class="btn btn-danger mb-3 mt-3">Add user</a>

  <table class="table table-hover text-center">
  <thead class="table-danger">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">user_type</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
      <?php
      @include 'config.php';

         $select="SELECT * FROM `user_form`";
         $result =mysqli_query($conn ,$select);
         while($row = mysqli_fetch_assoc($result)){

          ?>
    <tr>
      <td><?php echo $row['id']  ?></td>
      <td><?php echo $row['name']  ?></td>
      <td><?php echo $row['email']  ?></td>
      <td><?php echo $row['password'] ?></td>
      <td><?php echo $row['user_type'] ?></td>
        <td>
            <a href="edit.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
            <a href="delete.php?id=<?php echo $row['id']?>" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
          </td>
    </tr>
          <?php
         }
          ?>
         

     
  </tbody>
 </table> 
</div>

  <!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
crossorigin="anonymous"></script>

</body>
</html>
