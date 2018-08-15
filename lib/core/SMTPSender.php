<?php
/**
 * Created by PhpStorm.
 * User: DEV
 * Date: 04/06/2018
 * Time: 13:07
 */

require_once ROOT . DS . LIB_DIR . DS . "composer" . DS . "vendor" . DS . "phpmailer" . DS . "phpmailer" . DS . "src" . DS . "PHPMailer.php";

class SMTPSender extends \PHPMailer\PHPMailer\PHPMailer
{

    public function __construct()
    {
        parent::__construct(true);

        $this->isSMTP();
//        $this->SMTPDebug = SMTP_DEBUG;

        $this->Host = SMTP_HOST;
        $this->Port = SMTP_PORT;
        $this->Username = SMTP_USER;
        $this->Password = SMTP_PASS;
        $this->SMTPAuth = true;
        $this->SMTPSecure = 'tls';

    }

    public function sendMail($receiver, $subject, $message)
    {
        $sender_mail = SMTP_USER;
        $receiver_mail = (is_array($receiver)) ? $receiver[0] : $receiver;

        $sender_name = SMTP_SENDER_NAME;
        $receiver_name = (is_array($receiver)) ? $receiver[1] : "";

        $this->setFrom($sender_mail, $sender_name);
        $this->addAddress($receiver_mail, $receiver_name);

        $this->Subject = $subject;
        $this->msgHTML($message);

        $this->AltBody = 'To view the message, please use an HTML compatible email viewer!';
        $this->action_function = 'callbackAction';

        return $this->send();
    }

    public function addfiles($file, $name = null)
    {
        if(is_null($name))
            $this->addAttachment($file);
        else
            $this->addAttachment($file, $name);
    }
}

