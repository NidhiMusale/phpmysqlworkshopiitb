<?php
    require("connect1.php");
    if(isset($_POST['submit'])){
        if(empty($_POST['username']) && empty($_POST['password'])){
            echo '<script>alert("Both Fields are Required")</script>';
        }
        else{
           $username = mysqli_real_escape_string($conn,$_POST['username']);
           $password = mysqli_real_escape_string($conn,$_POST['password']);
           $password = md5($password);
           $query = "INSERT INTO details(Name , Password) VALUES('$username','$password')";
           if(mysqli_query($conn,$query)){
               echo '<script>alert("Registration Sucessful")</script>';
           }
        }
    }

?>





<form action="q1_md5.php" method='POST'>
<h3>Enter Your Details</h3>
Name: <input type='text' name='username' ><br/><br>
Password: <input type='password' name = 'password'><br>
Submit: <input type='submit' name='submit'><br>
</form>