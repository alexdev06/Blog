<?php

namespace ADABlog\Fram;

use PHPMailer\PHPMailer\PHPMailer;

class MailManager
{
    const HOST = 'smtp.ionos.fr';
    const USER_NAME = 'contact@alexandremanteaux.fr';
    const PASSWORD = '21051982Azer@;';
    const HOST_EMAIL = 'contact@alexandremanteaux.fr';
    const SMTP_AUT = true;
    const PORT = 587;

    private $mail;
    private $email_address;
    private $email_subject;
    private $email_body;

    public function __construct(string $email_address, string $email_subject,  string $email_body)
    {
        // Mailer initialisation and configuration
        $this->mail = new PHPMailer(true);
        $this->mail->isSMTP();                                        // Send using SMTP
        $this->mail->Host       = self::HOST;                        // Set the SMTP server to send through
        $this->mail->SMTPAuth   = self::SMTP_AUT;                   // Enable SMTP authentication
        $this->mail->Username   = self::USER_NAME;                  // SMTP username
        $this->mail->Password   = self::PASSWORD;                   // SMTP password
        $this->mail->Port       = self::PORT;                        // TCP port to connect to
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $this->mail->addAddress(self::HOST_EMAIL);
        $this->mail->isHTML(true);

        $this->email_address = $email_address;
        $this->email_subject = $email_subject;
        $this->email_body = $email_body;
    }

    public function sendEmail()
    {
        $this->mail->setFrom($this->email_address);
        $this->mail->Subject = $this->email_subject;
        $this->mail->Body    = $this->email_body;
        $this->mail->send();
        $this->mail->ClearAddresses();
    }

    public function sendConfirmationContactEmail()
    {
        $this->mail->addAddress($this->email_address);
        $this->mail->setFrom('noreply@alexandremanteaux.fr');
        $this->mail->Subject = 'Demande de contact';
        $this->mail->Body    = 'Votre demande de contact a bien été prise en compte. Vous serez contacté dans les plus brefs délais';
        $this->mail->send();
    }

    public function sendEmailWithConfirmation()
    {
        $this->sendEmail();
        $this->sendConfirmationContactEmail();
    }
}
