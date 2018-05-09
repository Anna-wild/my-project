<?php
/**
 * Created by PhpStorm.
 * User: OMEN-666
 * Date: 09.05.2018
 * Time: 16:28
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
public function homepage ()
{
    return new Response("first");
}

    /**
     * @Route("/news/{slug}")
     */
public function site($slug)
{
 return new Response(sprintf("hello %s",$slug));
}
}