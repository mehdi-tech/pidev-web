<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        return $this->redirectToRoute('index');
    }

    public function accountSettingsAction() {
        return $this->render('@User/Default/profile-account-setting.html.twig');
    }

    public function showProfileAction() {
        return $this->render('@User/Default/my-profile-feed.html.twig');
    }

    public function postOverviewAction() {

    }

    public function redirectAction()
    {

    }
}
