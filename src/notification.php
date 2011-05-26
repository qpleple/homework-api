<?php
function homeworkSubmittedNotification($id) {
    global $gmail_username, $gmail_password, $gmail_from, $gmail_to;
    
    $mail = new PHPGMailer();
    $mail->Username = $gmail_username; 
    $mail->Password = $gmail_password;
    $mail->From = $gmail_from; 
    $mail->FromName = 'Homework API';
    $mail->Subject = '[Homework] New one !';
    $mail->AddAddress($gmail_to);
    $mail->Body = "You have work to do !\nid = $id";
    $mail->Send();
}

function sendWorkDoneEmail($id) {

}