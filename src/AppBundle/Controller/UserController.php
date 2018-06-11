<?php
/**
 * Created by PhpStorm.
 * User: aaloulou
 * Date: 11/06/2018
 * Time: 13:50
 */

namespace AppBundle\Controller;


use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;

class UserController extends FOSRestController
{

    /**
     * @Rest\Get("/users")
     *
     * @return array
     */
    public function getUsersAction()
    {
        return json_decode(file_get_contents('../app/Resources/datasource.json'), true);
    }
}