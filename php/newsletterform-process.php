<?php
$errorMSG = "";

if (empty($_POST["email"])) {
    $errorMSG = "Email is required ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["terms"])) {
    $errorMSG = "Terms is required ";
} else {
    $terms = $_POST["terms"];
}

$EmailTo = "yourname@domain.com";
$Subject = "Đăng ký nhận bản tin mới từ trang";

// prepare email body text
$Body = "";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Terms: ";
$Body .= $terms;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "Thành công";
}else{
    if($errorMSG == ""){
        echo "Đã xảy ra sự cố :(";
    } else {
        echo $errorMSG;
    }
}
?>