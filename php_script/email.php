<?php
echo "Your email has been sent";

if(!empty($_POST['send'])){
    $fullname = $_POST['fullName'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $interest = $_POST['interest'];
    $budget = $_POST['budget'];
    $message = $_POST['message'];
    $toEmail = "dk9094293@gmail.com";

    

    $mailHeaders = "Name: " .$fullname. 
    "\r\n company: " . $company .
    "\r\n Email: " . $email .
    "\r\n Phone: " . $phone .
    "\r\n Interest: " . $interest .
    "\r\n Budget: " . $budget .
    "\r\n Message: " .$message . "\r\n";

    if(mail($toEmail, $username, $mailHeaders)){
        $message = "Your information is recieved successfully.";
        echo "<script>alert('Message sent successfully!')</script>";
    }
}


?>