<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if (isset($_POST['submitMail']) && isset($_POST['message'])) 
{
    $resultMess = $_POST['message'];
    $user = $_SERVER['DB_USERNAME'];
    $password = $_SERVER['DB_PASSWORD'];
    $host = "localhost";
    $DB = $_SERVER['DB_RECIPIENTS'];

    $mysql = mysqli_connect($host, $user, $password, $DB) or die("Unable to connect");
    mysqli_set_charset($mysql, 'UTF8');

    $sql = "SELECT * FROM recipients";
    $result = mysqli_query($mysql, $sql);

    if ($result) 
    {
        while ($row = mysqli_fetch_array($result)) 
        {
            $mail = new PHPMailer();
            $mail->CharSet = 'UTF-8';
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = 'smtp.mail.ru';
            $mail->Username = $_SERVER['DB_MAILUSER'];
            $mail->Password = $_SERVER['DB_MAILPASS'];
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->Subject = 'Test';
            $mail->Body = $resultMess;
            $mail->isHTML(true);
            $mail->setFrom($_SERVER['DB_MAILUSER'], 'Angelina Rusinovich');
            $mail->addAddress($row['name_user'], $row['name_person']);
            if ($mail->send()) 
            {
                echo  '<br/>' . 'Was sent successfully for ' . $row['name_person'];
            } else {
                echo 'Error: ' . $mail->ErrorInfo;
            }
        }
        mysqli_free_result($result);
    }
    mysqli_close($mysql);
}
?>