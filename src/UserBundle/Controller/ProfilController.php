<?php

namespace UserBundle\Controller;

use UserBundle\Entity\Profil;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Profil controller.
 *
 */
class ProfilController extends Controller
{
    /**
     * Lists all profil entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $profils = $em->getRepository('UserBundle:Profil')->findAll();

        return $this->render('profil/index.html.twig', array(
            'profils' => $profils,
        ));
    }

    public function indexOverViewAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $user_id = $user->getId();

        $em = $this->getDoctrine()->getManager();

        $profils = $em->getRepository('UserBundle:Profil')->findOneBy(array('user_id'=> $user_id));
        dump($profils);

        return $this->render('profil/overview/index.html.twig',array('user' => $user));
    }

    public function newOverviewAction(Request $request) {
        $profil = new Profil();

    }

    /**
     * Creates a new profil entity.
     *
     */
    public function newAction(Request $request)
    {
        $profil = new Profil();
        $form = $this->createForm('UserBundle\Form\ProfilType', $profil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($profil);
            $em->flush();

            return $this->redirectToRoute('profil_show', array('id' => $profil->getId()));
        }

        return $this->render('profil/new.html.twig', array(
            'profil' => $profil,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a profil entity.
     *
     */
    public function showAction(Profil $profil)
    {
        $deleteForm = $this->createDeleteForm($profil);

        return $this->render('profil/show.html.twig', array(
            'profil' => $profil,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing profil entity.
     *
     */
    public function editAction(Request $request, Profil $profil)
    {
        $deleteForm = $this->createDeleteForm($profil);
        $editForm = $this->createForm('UserBundle\Form\ProfilType', $profil);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('profil_edit', array('id' => $profil->getId()));
        }

        return $this->render('profil/edit.html.twig', array(
            'profil' => $profil,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a profil entity.
     *
     */
    public function deleteAction(Request $request, Profil $profil)
    {
        $form = $this->createDeleteForm($profil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($profil);
            $em->flush();
        }

        return $this->redirectToRoute('profil_index');
    }

    /**
     * Creates a form to delete a profil entity.
     *
     * @param Profil $profil The profil entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Profil $profil)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('profil_delete', array('id' => $profil->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
