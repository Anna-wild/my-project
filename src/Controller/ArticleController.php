<?php
/**
 * Created by PhpStorm.
 * User: OMEN-666
 * Date: 09.05.2018
 * Time: 16:28
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/",name="home")
     */
public function homepage ()
{
    return $this->render("article/home.html.twig");
}
    /**
     * @Route("/show", name="show")
     */
public function site()
{
     return $this->render("article/show.html.twig");
}
}