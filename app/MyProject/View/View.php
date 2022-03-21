<?php

    namespace MyProject\View;

    class View
    {
        private $templatePath;

        public function __construct(string $templatePath)
        {
            $this -> templatePath = $templatePath;
        }

        public function renderTemplates(string $peth, array $vars)
        {
            extract($vars);

            ob_start();

            include $this -> templatePath.'/'.$path;

            $res = ob_get_contents();

            ob_end_clean();

            echo $res;
        }
    }

    



?>