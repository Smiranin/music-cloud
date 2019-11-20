<?php
include_once '../models/SongsModel.php';

class MainController extends Controller
{
    public function index ()
    {
        $this->model = new SongsModel();
        $data = $this->model->getData();

        $this->loadTemplate($data);
    }

    public function loadTemplate($data)
    {
        $this->view->assign('songs', $data);

        $this->view->display('header'. TemplatePostfix);
        $this->view->display('index' . TemplatePostfix);
        $this->view->display('footer' . TemplatePostfix);
    }
}