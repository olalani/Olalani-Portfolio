<?php
    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $message= $_POST['message'];

        $to= 'seunolalani@yahoo.com';
        $subject= 'Form Submission';
        $message= "Name:".$name."\n"."Phone:".$phone."\n"."Wrote the following: "."\n\n".$message;
        $headers= "from: ".$email;

        if(mail($to,$subject,$message,$header)){
            echo "<h1>Message Sent Successfully! Thank You"." ".$name.", We will contact you shortly!</h1>";
        }
        else{
            echo "Something went wrong!";
        }
    }

?>