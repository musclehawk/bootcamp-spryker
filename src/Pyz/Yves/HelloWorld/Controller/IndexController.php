<?php

namespace Pyz\Yves\HelloWorld\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends AbstractController
{
    /**
     * @param Request $request
     * @return array
     */
    public function indexAction(Request $request)
    {
        $data = ['helloWorld' => 'Hello World and Hello Spryker!'];

        return $this->view($data, [], '@HelloWorld/index/index.twig');
    }
}
