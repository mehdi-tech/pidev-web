<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use UserBundle\Entity\Profil;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $authChecker = $this->container->get('security.authorization_checker');
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        if ($authChecker->isGranted('ROLE_ENTREPRISE')) {
            return $this->render('@User/Default/entreprisehome.html.twig');
        }
        else if ($authChecker->isGranted('ROLE_USER')) {
            $em = $this->getDoctrine()->getManager();
            $checkProfil = $em->getRepository('UserBundle:Profil')->findOneBy(array('user'=> $user));
            if (!$checkProfil) {
                $profil = new Profil();
                $profil->setUser($user);
                $em->persist($profil);
                $em->flush();
            }
            return $this->render('@User/Default/userhome.html.twig',array('user' => $user));
        }

        else {
        return $this->render('Default/index.html.twig');
    }
    }

    public function loginAction(Request $request)
    {
        return $this->render('default/login.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

}
