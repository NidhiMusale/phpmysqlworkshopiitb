<?php
require ("connect.php");
$success=null; 
$error=null;
$name=(isset($_POST['name']) ? $_POST['name'] : null );
$email=(isset($_POST['email']) ? $_POST['email'] : null );
$password=(isset($_POST['password']) ? $_POST['password'] : null );
$password2=(isset($_POST['password2']) ? $_POST['password2'] : null );
if(isset($_POST['submit'])){
 
    if(!empty($name && $password && $email && $password2)){

        $compare = "SELECT * FROM students";//where email='$email'
        $result1 = mysqli_query($conn, $compare);
        if (mysqli_num_rows($result1) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result1)) {
                $stored_email=$row["email"];
                if($stored_email === $email){
                    die ("User already exists");
                    // mysqli_close($conn);
                }               
                }                          
            }
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) { 
                if($password === $password2){
                    $password=md5($password);
                    $sql="INSERT into students (name,password,email) VALUES('$name','$password','$email');";
                    $sql .= "INSERT INTO marks (student_id) SELECT MAX(id) FROM students";
                    
                    if (mysqli_multi_query($conn, $sql)) {
                        do {
                            /* store first result1 set */
                            if ($result1 = mysqli_store_result1($conn)) {
                                while ($row = mysqli_fetch_row($result1)) {
                                    
                                }
                                mysqli_free_result1($result1);
                            }
                            /* print divider */
                            if (mysqli_more_result1s($conn)) {
                                echo "<script type='text/javascript'>alert('New user Added');
                                window.location='login.php';
                                </script>";
                            }
                        } while (mysqli_next_result1($conn));
                    } 
                    else {
                        echo "Error: " . $sql . ":-" . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                    
                }
                    else $error="Passwords Don't match";
                }
                else $error="Please enter a valid email";           
        }
        else  $error="Input Values";
        // mysqli_close($conn);    
    }
    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>form{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    input{
        margin: 5px;
        }
    #submit{
        margin: 0 auto;
    }    
        </style>
</head>
<body>
    <h1 style="text-align: center;">Registration Form</h1>
        <form action="" method="post">
        Username <input type="text" name="name" value="<?php echo $name?>"required>
        <br>
        Email <input type="email" name="email" value="<?php echo $email ?>" required>
        <br>
        Password <input type="password" name="password" value="<?php echo $password ?>" required>
        <br>
        ConfirmPassword <input type="password" name="password2" value="<?php echo $password2 ?>" required>
        <br>
        <input type="submit" name="submit" id="submit">
        </form>
      <h3 style="text-align: center;"><?php echo $success; echo $error; ?></h3>  
            
</body>
</html>