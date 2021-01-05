<?php require ("Connect.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiginUp</title>
    <link rel="stylesheet" href="">
</head>
<body>
<form action="" method="post">

    <input type="text" name="name" id="name"required placeholder="Full Name"> <br><br>
    <input type="email" name="email" id="email" required placeholder="Email"> <br><br>
    <input type="password" name="password" id="password" required placeholder="Password"> <br><br>
    <input type="submit" name="submit" id="submit" value="Add Users">
    
</form>


</body>
</html>



<?php

if (isset($_POST['submit'])){
    
  $name = $_POST['name'];
  $email = $_POST["email"];
  $password = $_POST["password"];

  if($name != "" && $email != "" && $password != ""){
      $sql = "INSERT INTO users (name , email , password)
                       VALUES('". $name ."' , '". $email ."' , '". $password ."')";
       mysqli_query($conn, $sql);
      header("Location: ./index.php");
  }
}
?>

<?php
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        $name=$row['name'];
        $email=$row['email'];
        $password=$row['password'];

       
        echo $name , $email , $password;
      
       
    }
}


?>
