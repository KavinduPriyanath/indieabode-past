<?php

class Assets extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->assets = $this->model->showAllAssets();

        $this->view->render('Assets');
    }
}
