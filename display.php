<?php 
include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title> Crud Operation</title>
		<h1 align="center" > kith</h1>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
  
  <div class="container">
  <button class="btn btn-primary my-5"><a href="crud.php"class="text-light">Add User</a>
 
 </button>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
	  <th scope="col">Password</th>
	  <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  
  $sql="Select * from `crud`";
  $result=mysqli_query($con,$sql);
  if($result){
	  while($row=mysqli_fetch_assoc($result)){
		  $id=$row['id'];
		  $name=$row['name'];
		   $email=$row['email'];
			$mobile=$row['mobile'];
			 $password=$row['password'];
			 echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>  
	  <td>'.$password.'</td>
   <td>
	<button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</button>
	<button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</button>
  </td>
    </tr>';
	  }
  }
  ?>

 
  </tbody>
</table>
  </div>
  
  </body>
</html>