<?php
/**
 * Created by PhpStorm.
 * User: OMEN-666
 * Date: 09.05.2018
 * Time: 16:28
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
public function homepage()
{
    return new Request("this is my first page");
}
}