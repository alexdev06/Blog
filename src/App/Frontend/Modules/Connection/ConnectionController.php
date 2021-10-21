<?php

namespace ADABlog\App\Frontend\Modules\Connection;

use \ADABlog\Fram\BackController;
use ADABlog\Fram\CaptchaManager;
use \ADABlog\Fram\HTTPRequest;


class ConnectionController extends BackController
{
    /**
     * Display and handle login form
     */
    public function executeIdentification(HTTPRequest $request)
    {
        $this->page->addVar('title', 'Connexion');
        $this->page->addVar('visitor', $this->app->visitor());
        $this->page->addVar('secret', CaptchaManager::CAPTCHA_SECRET_SITE);

        if ($request->postExists('login')) {
            // Captcha validation
            if (true == CaptchaManager::captchaValidation()) {
                $login = $request->postData('login');
                $password = $request->postData('password');

                $manager = $this->managers->getManagerOf('Users');
                $user = $manager->get($login);

                if (!isset($user) || empty($user)) {
                    $this->app->visitor()->setFlash('Pseudo incorrect');
                } else {
                    if (password_verify($password, $user->password())) {
                        $this->app->visitor()->setLogin($user->username());
                        if ($user->administratorStatus() == true) {
                            $this->app->visitor()->setAuthenticated(true);
                            $this->app->visitor()->setAdministrator(true);
                            $this->app->httpResponse()->redirect('/admin');
                        } elseif ($user->memberStatus() == 1 && $user->administratorStatus() == 0) {
                            $this->app->visitor()->setAuthenticated(true);
                            $this->app->httpResponse()->redirect('/admin');
                        } else {
                            $this->app->visitor()->setFlash('Votre compte n\'a pas encore été validé');
                        }
                    } else {
                        $this->app->visitor()->setFlash('Mot de passe incorrect');
                    }
                }
            }
        }
    }
}
