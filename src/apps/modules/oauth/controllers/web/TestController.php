<?php

namespace App\Oauth\Controllers\Web;

use Phalcon\Mvc\Controller;

class TestController extends Controller
{
    public function indexAction()
    {
        return "TEST WORKED";
    }
    public function paramAction($num1)
    {
        return "You entered $num1";
    }
}
