<html><body>
<?php
$fname = $_Post['fname'];
$lname = $_Post['lname'];
$Email = $_Post['Email'];
$age = $_Post['age'];
$AddressLine1 = $_Post['Address Line1'];
$AddressLine2 = $_Post['Address Line2'];
$City = $_Post['City'];
$State = $_Post['State'];
$Country = $_Post['Country'];
$Phone_No = $_Post['"Phone_No.'];
$Purpose_Of_Work = $_Post['Purpose_Of_Work'];

$email_from ="nileshmalav2005@gmail.com";

$email_subject ="New Form Submission";

$email_body =" name: $fname $lname \n".
                " Email: $Email \n".
                "age: $age \n".
                "Address line 1: $AddressLine1 \n". 
                "Address Line 2: $AddressLine2 \n". 
                "City: ".
                "State: ". 
                "country: ". 
                "Phone No: ". 
                "Purpose of work ";
            $to = "ourrightfirst@gmail.com\r\n";
            $headers = "From: $email_from\r\n";
            $headers = "From: $Email\r\n";
            mail($to,$email_subject,$email_body,$headers);
            header("Location: index.html");
echo "Thank you";
?>
</body></html>
