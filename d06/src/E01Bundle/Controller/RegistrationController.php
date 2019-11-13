<?php

namespace E01Bundle\Controller;
use E01Bundle\Form\UserType;
use E01Bundle\Entity\Users;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegistrationController extends Controller
{
    /**
     * @Route("/register", name="user_registration")
     */
    public function registerAction(Request $request)
    {
        // 1) build the form
        $user = new Users();
        $form = $this->createForm(UserType::class, $user);
        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            echo $form->get('username')->getData();
            echo $this->getDoctrine()->getRepository(Users::class);
        	// if ( $this->getDoctrine()->getRepository(Users::class)->findOneBy(['username' => $form->get('username')->getData()]) || $this->getDoctrine()->getRepository(Users::class)->findOneBy(['email' => $form->get('email')->getData()])){
			// }
			// else {
			// 	// 3) Encode the password (you could also do this via Doctrine listener)
	        //     $password = $this->get('security.password_encoder')
	        //         ->encodePassword($user, $user->getPlainPassword());
	        //     $user->setPassword($password);
	        //     // 4) save the User!
	        //     $entityManager = $this->getDoctrine()->getManager();
	        //     $entityManager->persist($user);
	        //     $entityManager->flush();
	        //     // ... do any other work - like sending them an email, etc
	        //     // maybe set a "flash" success message for the user
	        //     return $this->redirectToRoute('home');
			// }
        }
        return $this->render(
            '@E01/register.html.twig',
            array('form' => $form->createView())
        );
    }
}
?>
