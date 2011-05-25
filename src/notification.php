<?php
function homeworkSubmittedNotification($id) {
    $mail = new PHPGMailer();
    $mail->Username = 'qpleple@gmail.com'; 
    $mail->Password = 'Aij!y48u59*3|SA(Cz~39{p[~9iU';
    $mail->From = 'qpleple@gmail.com'; 
    $mail->FromName = 'Homework API';
    $mail->Subject = '[Homework] New one !';
    $mail->AddAddress('quentin.pleple@gmail.com');
    $mail->Body = "You have work to do !\n  * Status : http://homeworkapi/status/$id\n  * Solution : http://homeworkapi/status/$id";
    $mail->Send();
}

function sendWorkDoneEmail($id) {

}