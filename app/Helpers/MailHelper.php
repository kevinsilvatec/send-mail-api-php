<?php

namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;

class MailHelper{

    public function sendMail($mailData){
        try {

            $mailHtml = $this->createHtmlEmail($mailData);
            
            if($mailHtml['statusCode'] === 500){
                throw new \Exception($mailHtml['message']);
            }
            
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->CharSet = 'UTF-8';
            $mail->Host = getenv('SMTP_HOST');
            $mail->Port = getenv('SMTP_PORT');
            $mail->SMTPAuth = true;
            $mail->SMTPAutoTLS = getenv('SMTP_SECURE');
            $mail->Username = $mailData['sellfMail'];
            $mail->Password = $mailData['sellfMailPass'];
            $mail->setFrom($mailData['sellfMail'], getenv('SMTP_AUTH_NAME'));
            $mail->addReplyTo($mailData['sellfMail'], getenv('SMTP_AUTH_NAME'));
            $mail->addAddress($mailData['advertiserEmail'], $mailData['advertiserName']);
            $mail->Subject = getenv('MAIL_SUBJECT');
            $mail->msgHTML($mailHtml['html']);
            if ($mail->send()) {
                $data = [
                    'message' => 'Mail sended with success!',
                    'statusCode'=> 200
                ];
            } else {
                $data = [
                    'message' => 'PHPMailer Error: ' . $mail->ErrorInfo,
                    'statusCode'=> 500
                ];
                
            }
            return $data;

        } catch (\Exception $e) {
            $data = [
                'message' => 'Error during trying send email | ' .$e->getMessage(). '. Line: ' . $e->getLine(),
                'statusCode'=> 500
            ];
            return $data;
        }

        
    }

    public function createHtmlEmail($mailData){         
        try {
            ob_start();
            include('Templates/MailLeadTemplate.php');
            $html = ob_get_contents();
            ob_end_clean();

            $data = [
                'message' => 'Html created with success!',
                'statusCode'=> 200,
                'html' => $html
            ];

            return $data;

        } catch (\Exception $e) {
            
            $data = [
                'message' => 'Error during create HTML | ' . $e->getMessage() . '. Line: ' . $e->getLine(),
                'statusCode'=> 500
            ];

            return $data;
        }
    }

    
}