<form action="q1.php" method='POST'>
<h3>Enter Your Details:</h3>
Name of Student: <input type='text' name='name' ><br/><br>

<legend>Marks in  Subject (out of 100)</legend><br>
Subject 1: <input type='number' name='sub1' ><br/><br>
Subject 2: <input type='number' name='sub2' ><br /><br>
Subject 3: <input type='number' name='sub3' ><br /><br>
Subject 4: <input type='number' name='sub4' ><br /><br>
Subject 5: <input type='number' name='sub5' ><br /><br>
<input type='submit' value='submit'/>
</form>

<?php

require("connect.php");
//grab POST data
@$name = $_POST['name'];
@$s1 =$_POST['sub1'];
@$s2 =$_POST['sub2'];
@$s3 =$_POST['sub3'];
@$s4 =$_POST['sub4'];
@$s5 =$_POST['sub5'];

$sum = $s1 + $s2 + $s3 + $s4 + $s5;
$per = (float)($sum/500)*100;
if($name && $s1 && $s2 && $s3 && $s4 && $s5){
    echo "
    <h3>Report</h3>
    <label>Student Name:</labe>$name<br>
    <label>Subject 1: </label>$s1<br>
    <label>Subject 2: </label>$s2<br>
    <label>Subject 3: </label>$s3<br>
    <label>Subject 4: </label>$s4<br>
    <label>Subject 5: </label>$s5<br>
    <label>Total Marks Obtained:</label>$sum<br>
    <label>Total Marks: </label>500<br>
    <label>Percentage: </label>$per%<br>";
    $write = "INSERT INTO class1 VALUES('', '$name', '$s1', '$s2', '$s3', '$s4', '$s5', '$sum', '500', '$per')";
    if ($conn->query($write) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $write . "<br>" . $conn->error;
    }
}
$conn->close();
?>