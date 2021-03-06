<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;

class AuthController extends Controller
{
    /**
     * @Rest\Post("/api/token-authentication")
     */
    public function tokenAuthentication(Request $request)
    {
        $username = $request->request->get('username');
        $password = $request->request->get('password');

        $user = $this->getDoctrine()->getRepository('AppBundle:User')
            ->findOneBy(['username' => $username]);

        if(!$user) {
            throw $this->createNotFoundException();
        }

        if(!$this->get('security.password_encoder')->isPasswordValid($user, $password)) {
            throw $this->createAccessDeniedException();
        }

        $token = $this->get('lexik_jwt_authentication.encoder')
            ->encode(['username' => $user->getUserName()]);


        $user->setToken($token);

        return $user;

    }

}
