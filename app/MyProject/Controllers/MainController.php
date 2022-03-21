<?php

namespace MyProject\Controllers;

use MyProject\View\View;

class MainController
{

    protected $view;

    public function __construct()
    {
        $this -> view = new View(__DIR__. '/../../../templates');
    }

    public function main()
    {
        $this -> view -> renderTemplates('main/main.php', ['title' => 'ToDo list']);
    }

}

?>