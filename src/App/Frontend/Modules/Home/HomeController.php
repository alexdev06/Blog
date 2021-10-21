<?php

namespace ADABlog\App\Frontend\Modules\Home;

use ADABlog\Fram\HTTPRequest;
use ADABlog\Fram\MailManager;
use ADABlog\Fram\BackController;
use ADABlog\Fram\CaptchaManager;

class HomeController extends BackController
{
    /**
     *  Homepage
     */
    public function executeIndex(HTTPRequest $request)
    {
        $this->page->addVar('title', 'Accueil');
        $this->page->addVar('visitor', $this->app->visitor());
        $this->page->addVar('secret', $_ENV['CAPTCHA_SECRET_SITE']);

        $charactersLength = $this->app->config()->get('characters_length');
        $manager = $this->managers->getManagerOf('News');
        $lastNews = $manager->getlastNews();

        foreach ($lastNews as $news) {
            if (strlen($news->content()) > $charactersLength) {
                $outset = substr($news->content(), 0, $charactersLength);
                $outset = substr($outset, 0, strrpos($outset, ' ')) . '...';
                $news->setContent($outset);
            }
        }

        $this->page->addVar('lastNews', $lastNews);
        // Check for empty fields
        if (null !== $request->postData('name')) {
            if (true == CaptchaManager::captchaValidation()) {
                if (empty($request->postData('name')) || empty($request->postData('lastName')) || empty($request->postData('email')) || empty($request->postData('message'))) {
                    $this->app->visitor()->setFlash('Tous les champs ne sont pas remplis!');
                } else {
                    if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $request->postData('email'))) {
                        $this->app->visitor()->setFlash('Email invalide');
                    } elseif (strlen($request->postData('name')) <= 1) {
                        $this->app->visitor()->setFlash('Prénom trop court');
                    } elseif (strlen($request->postData('lastName')) <= 2) {
                        $this->app->visitor()->setFlash('Nom trop court');
                    } elseif (strlen($request->postData('message')) <= 2) {
                        $this->app->visitor()->setFlash('message trop court');
                    } else {
                        // Send Email message and confirmation with MailManager class
                        $name = strip_tags(htmlspecialchars($request->postData('name')));
                        $lastName = strip_tags(htmlspecialchars($request->postData('lastName')));
                        $email_address = strip_tags(htmlspecialchars($request->postData('email')));
                        $message = strip_tags(htmlspecialchars($request->postData('message')));
                        $email_subject = "Demande de contact sur le blog par :  $name $lastName";
                        $email_body = "Vous avez reçu un nouveau message de contact en provenance de votre site.\n\n" . "Les détails:\n\nPrénom: $name\n\nEmail: $email_address\n\nMessage:\n$message";
                        (new MailManager($email_address, $email_subject, $email_body))->sendEmailWithConfirmation();

                        $this->app->visitor()->setFlash('Votre demande de contact a bien été envoyée!');
                    }
                }
            }
        }
    }
}
