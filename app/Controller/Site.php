<?php
namespace Controller;

use Src\View;
class Site
{
    public function index(): string
    {
        $view = new View();
        return $view->render('site.hello', ['message' => 'index working<br><a href="javascript:history. back()"">home</a>']);
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working<br><a href="javascript:history. back()"">home</a>']);
    }
}
