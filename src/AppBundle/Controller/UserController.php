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
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class UserController extends FOSRestController
{

    /**
     * @Rest\Get("/users")
     *
     * @Rest\QueryParam(name="query", description="Search query text")
     * @Rest\QueryParam(name="items_per_page", description="Number of elements per page", default="10", requirements="\d+")
     * @Rest\QueryParam(name="page_index", description="Page index", default="0", requirements="\d+")
     *
     * @ApiDoc(
     *     description="List users",
     *     section="Users",
     *     response={
     *          200="Success"
     *     }
     * )
     * @return array
     */
    public function getUsersAction()
    {
        return json_decode(file_get_contents('../app/Resources/datasource.json'), true);
    }
}