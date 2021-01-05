<?php require ("config.php"); ?>

<?php


if(isset($_GET['id'])){

    $id = mysqli_real_escape_string($conn, $_GET['id']);
    


    

        $sql_query = "DELETE FROM users where id='" . $id . "'";
        $result = mysqli_query($conn, $sql_query);
        if ($result > 0) {
            echo "<h1>user has been deleted</h1>";
        }else{
            echo "<h1>no user has been deleted</h1>";
        }
    
}


if (isset($_POST['but_submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name2']);
    


    if ($name != "") {

        $sql_query = "DELETE FROM users where name='" . $name . "'";
        $result = mysqli_query($conn, $sql_query);
        if ($result > 0) {
            echo "<h1>user has been deleted</h1>";
        }else{
            echo "<h1>no user has been deleted</h1>";
        }
    }
}
?>
<html>

<head>
    <title>Create simple login page with PHP and MySQL</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>


<body>

<?php
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $idP=$row["id"];
  
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " -Email: " . $row["email"]."<a href='index.php?id=".$row["id"]."'>delete</a>". "<br>";
  }
} else {
  echo "0 results";
}
?>
    <div class="container">
        <form method="post" action="">
            <div id="div_login">
                <h1>enter username to delete</h1>
                <div>
                    <input type="text" class="textbox" id="txt_uname" name="name2" placeholder="Username" />
                </div>

                <div>
                    <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                </div>
            </div>
        </form>
    </div>
</body>

</html>