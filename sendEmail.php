<?php
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['submit']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "youremail@gmail.com";
    $mail->Password = "yourpassword";
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress('sushiheaven2021@gmail.com');
    $mail->Subject($email, ($message));
    $mail->Body = 'There is body';
    if($email->send()){
        $status = "success";
        $response = "Email is sent";
    }else{
        $status = "Oops!!!";
        $response = "Some error <br>".$mail->ErrorInfo;
    }
    exit(json_encode(array("ststus"=>$status, "response"=>$response)));
}
?>