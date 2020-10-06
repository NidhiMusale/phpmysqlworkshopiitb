<?php
    if($_POST['submit'])
    {
        $toemail = $_POST['toemail'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if($toemail && $message){
            $to = 'NidhiMusale712@gmail.com';
            $subject = $subject;
            $headers = "From: nimohp7@gmail.com";
            $body = $message;

            mail($to , $subject , $body , $headers);
            echo "Mail sent successfully";
        }
        else{
            die("You must enter a proper name and message");
        }
    }

?>
