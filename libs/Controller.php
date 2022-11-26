<?php

class Controller
{


    function __construct()
    {
        $this->view = new View();
    }

    public function loadModel($modelName)
    {
        $path = 'models/' . $modelName . '_Model.php';

        if (file_exists($path)) {
            require $path;
            $className = $modelName . '_Model';
            $this->model = new $className();
        }
    }
}
