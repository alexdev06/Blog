<?php

namespace ADABlog\Fram;

class CaptchaManager
{
    const CAPTCHA_SECRET = "6LehGMAUAAAAAGT7FXQAvNN5APjP9d6mh7Qlp_rM";
    const CAPTCHA_SECRET_SITE  = "6LehGMAUAAAAAAu-G1BzjkHTyWssiMYxtuL--4bm";

    public static function captchaValidation()
    {
        $secret = self::CAPTCHA_SECRET;
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
