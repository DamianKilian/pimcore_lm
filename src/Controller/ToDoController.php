<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\ToDo;
use Symfony\Bridge\Twig\Attribute\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ToDoController extends FrontendController
{
    public function defaultAction(Request $request): Response
    {
        $list = ToDo::getList();
        $todos = $list->load();
        return $this->render('toDo/default.html.twig', [
            'todos' => $todos,
        ]);
    }
}
