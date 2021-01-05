<?php
include "config.php";


if(isset($_POST['but_submit'])){

    $fullname = mysqli_real_escape_string($con,$_POST['fullname']);
    $phonenumber = mysqli_real_escape_string($con,$_POST['phonenumber']);
    $country = mysqli_real_escape_string($con,$_POST['country']);
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['pass']);



    if ($username != "" && $password != ""&&  $fullname !="" && $phonenumber!=""){

        $sql_query = "INSERT INTO users (username,password,country,p_num,f_name)
         VALUES('".$username."','".$password ."','". $country."','".$phonenumber."','". $fullname ."')";
        $result = mysqli_query($con,$sql_query);
        header('Location: home.php');

    }

}
?>
<html>
    <head>
    
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <form method="post" action="">
                <div id="div_login">
                    <h1>register</h1>
                    <div>
                        <input type="text" class="textbox" id="txt_uname" name="fullname" placeholder="full name" />
                    </div>
                    <div>
                        <input type="text" class="textbox" id="txt_uname" name="phonenumber" placeholder="phone number"/>
                    </div>
                    
                    <div>
                        <input type="text" class="textbox" id="txt_uname" name="country" placeholder="country" />
                    </div>
                    <div>
                        <input type="text" class="textbox" id="txt_uname" name="username" placeholder="username" />
                    </div>
                    <div>
                        <input type="text" class="textbox" id="txt_uname" name="pass" placeholder="password" />
                    </div>
                    
                    <div>
                        <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>

