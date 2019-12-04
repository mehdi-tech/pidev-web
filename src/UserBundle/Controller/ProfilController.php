<?php

namespace UserBundle\Controller;

use UserBundle\Entity\education;
use UserBundle\Entity\Profil;
use UserBundle\Entity\experience;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Form\EducationType;
use UserBundle\Form\ExperienceType;
use UserBundle\Form\LocationType;
use UserBundle\Form\OverviewType;

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
        if (!$user) {
            return $this->redirectToRoute('fos_user_security_login');
        }
        $user_id = $user->getId();

        $em = $this->getDoctrine()->getManager();

        $profil = $em->getRepository('UserBundle:Profil')->findOneBy(array('user'=> $user_id));



        return $this->render('@User/Default/my-profile-feed.html.twig',array('profil' => $profil));
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

    function showAddExperienceAction(Request $request) {
        $experience = new experience();
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        if (!$user) {
            return $this->redirectToRoute('fos_user_security_login');
        }
        $user_id = $user->getId();

        $profil = $em->getRepository('UserBundle:Profil')->findOneBy(array('user'=> $user_id));

        $experience->setProfil($profil);

        $form = $this->createForm(ExperienceType::class,$experience);

        if (!$experience) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $form->handleRequest($request);
        if ($form->isValid()) {

            $em->persist($experience);
            $em->flush();
            return $this->redirectToRoute('profil_index');
        }
        return $this->render('@User/Default/experience/add.html.twig',array('form' => $form->createView()));
    }
    function showEditExperienceAction(Request $request,$id){
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UserBundle:experience')->find($id);

        $form = $this->createForm(ExperienceType::class,$entity);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $form->handleRequest($request);
        if ($form->isValid()) {

            $em->flush();
            return $this->redirectToRoute('profil_index');
        }
        return $this->render('@User/Default/experience/edit.html.twig',array('form' => $form->createView()));
    }

    function showEditEducationAction(Request $request,$id){
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UserBundle:education')->find($id);

        $form = $this->createForm(EducationType::class,$entity);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $form->handleRequest($request);
        if ($form->isValid()) {

            $em->flush();
            return $this->redirectToRoute('profil_index');
        }
        return $this->render('@User/Default/education/edit.html.twig',array('form' => $form->createView()));
    }

    function showEditOverviewAction(Request $request,$id){
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UserBundle:Profil')->find($id);

        $form = $this->createForm(OverviewType::class,$entity);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $form->handleRequest($request);
        if ($form->isValid()) {

            $em->flush();
            return $this->redirectToRoute('profil_index');
        }
        return $this->render('@User/Default/overview/edit.html.twig',array('form' => $form->createView()));
    }

    function showEditLocationAction(Request $request,$id){
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UserBundle:Profil')->find($id);

        $form = $this->createForm(LocationType::class,$entity);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $form->handleRequest($request);
        if ($form->isValid()) {

            $em->flush();
            return $this->redirectToRoute('profil_index');
        }
        return $this->render('@User/Default/location/edit.html.twig',array('form' => $form->createView()));
    }

    function showAddEducationAction(Request $request) {
        $education = new education();
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        if (!$user) {
            return $this->redirectToRoute('fos_user_security_login');
        }
        $user_id = $user->getId();

        $profil = $em->getRepository('UserBundle:Profil')->findOneBy(array('user'=> $user_id));

        $education->setProfil($profil);

        $form = $this->createForm(EducationType::class,$education);

        if (!$education) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $form->handleRequest($request);
        if ($form->isValid()) {

            $em->persist($education);
            $em->flush();
            return $this->redirectToRoute('profil_index');
        }
        return $this->render('@User/Default/education/add.html.twig',array('form' => $form->createView()));
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
