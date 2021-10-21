<?php

namespace ADABlog\Fram;

class CaptchaManager
{
    public static function captchaValidation()
    {
        $secret = $_ENV['CAPTCHA_SECRET'];
        $response = $_POST['g-recaptcha-response'];
        $remoteip = $_SERVER['REMOTE_ADDR'];

        $api_url = "https://www.google.com/recaptcha/api/siteverify?secret="
            . $secret
            . "&response=" . $response
            . "&remoteip=" . $remoteip;

        $decode = json_decode(file_get_contents($api_url), true);

        return $decode['success'];
    }
}
