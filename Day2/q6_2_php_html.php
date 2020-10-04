<html>
   <form action="q6_b_php_html.php" method="post" >
      <table>
         <caption>STUDENT MARKSHEET FORM</caption>
         
         <tr>
            <td>Student Name</td>
            <td><input type="text" name='stn' size=30></td>
         </tr>
         <tr>
             <td><b>Marks in Each Subject:</b></td>
         </tr>
         <tr>
            <td>subject1</td>
            <td><input type="text" name='eng'size=30></td>
         </tr>
         <tr>
            <td>subject2</td>
            <td><input type="text" name='math' size=30></td>
         </tr>
         <tr>
            <td>subject3</td>
            <td><input type="text" name='phy' size=30></td>
         </tr>
         <tr>
            <td>subject4</td>
            <td><input type="text" name='chem'size=30></td>
         </tr>
         <tr>
            <td>subject5</td>
            <td><input type="text" name='hin' size=30></td>
         </tr>
         <tr>
            <td><input type="submit"></td>
            
         </tr>
      </table>
   </form>
</html>
<?php 
@$name1 = $_POST['stn'];
@$marks1 = $_POST['eng'];
@$marks2 = $_POST['math'];
@$marks3 = $_POST['phy'];
@$marks4 = $_POST['chem'];
@$marks5 = $_POST['hin'];
$total= $marks1 + $marks2 + $marks3 + $marks4 + $marks5 ;
echo "Total marks obtained : $total <br>";
echo "Total marks :500 <br>";
$Percentage = ($total/500)*100;
echo "percentage : $Percentage %";

?>

