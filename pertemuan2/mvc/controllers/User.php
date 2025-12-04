<?php

require_once "models/User_model.php";

class User
{
    private $model;

    public function __construct()
    {
        $this->model = new User_model();
    }

    public function index()
    {
        $users = $this->model->getAll();
        require "views/list.php";
    }

    public function detail()
    {
        $id = $_GET["id"];
        $user = $this->model->getById($id);
        require "views/detail.php";
    }

    public function add()
    {
        require "views/add.php";
    }

    public function store()
    {
        $this->model->add($_POST["nama"], $_POST["email"]);
        header("Location: index.php");
    }

    public function edit()
    {
        $id = $_GET["id"];
        $user = $this->model->getById($id);
        require "views/edit.php";
    }

    public function update()
    {
        $this->model->update($_POST["id"], $_POST["nama"], $_POST["email"]);
        header("Location: index.php");
    }

    public function delete()
    {
        $id = $_GET["id"];
        $this->model->delete($id);
        header("Location: index.php");
    }
}
