<?php
function homeworkSubmittedNotification($id) {
    $mail = new PHPGMailer();
    $mail->Username = 'yourgmailaccount@gmail.com'; 
    $mail->Password = 'yourgmailpassword';
    $mail->From = 'from-address@gmail.com'; 
    $mail->FromName = 'Homework API';
    $mail->Subject = '[Homework] New one !';
    $mail->AddAddress('to-address@gmail.com');
    $mail->Body = "You have work to do !\nid = $id";
    $mail->Send();
}

function sendWorkDoneEmail($id) {

}