<?php
// include 'dbconnect.php';

if(isset($_POST['send'])){
    $subject = "Enquiry form JSS Technologies website";
    $fullname = $_POST['fullName'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $interest = $_POST['interest'];
    $budget = $_POST['budget'];
    $message = $_POST['message'];

    $toEmail = "info@jsstechnologiesllc.com";

  // $insert_sql = "INSERT INTO `emails`(`full_name`, `company`, `email`, `phone`, `interest`, `budget`, `message`, `send_at`) 
   // VALUES ('$fullname','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]')";

   $headers = [
    'Name' =>  $fullname,
    'Company' => $company,
    'From' => $email,
    'Phone Number' => $phone,
    'Interest' => $interest,
    'Budget' => $budget,
    'Message' => $message,
];

$headers = implode("\r\n", $headers);


    // $mailHeaders = "Name: ". $fullname .
    // "\r\n company: " . $company .
    // "\r\n Email: " . $email .
    // "\r\n Phone: " . $phone .
    // "\r\n Interest: " . $interest .
    // "\r\n Budget: " . $budget .
    // "\r\n Message: " . $message . "\r\n";

    mail($toEmail, $subject, $fullname, $headers);
        echo "<script>alert('Your information is recieved successfully!.')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
        
}
?>