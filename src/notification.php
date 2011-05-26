<?php
function homeworkSubmittedNotification($id) {
    $mail = new PHPGMailer();
    $mail->Username = 'qpleple@gmail.com'; 
    $mail->Password = 'Iat2Ci2R9K3P24FCWGu963641oLkps';
    $mail->From = 'qpleple@gmail.com'; 
    $mail->FromName = 'Homework API';
    $mail->Subject = '[Homework] New one !';
    $mail->AddAddress('quentin.pleple@gmail.com');
    $mail->Body = "You have work to do !\nid = $id";
    $mail->Send();
}

function sendWorkDoneEmail($id) {

}