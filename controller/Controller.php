<?php
include_once("model/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function invoke()
	{
		if (!isset($_GET['book']))
		{
			// no special book is requested, we'll show a list of all available books
			$books = $this->model->getBookList();
			include 'view/booklist.php';
		}
		else
		{
			// show the requested book
			$book = $this->model->getBook($_GET['book']);
			include 'view/viewbook.php';
		}
	}
  	public function get_user_list()
	{
		if (!isset($_GET['user']))
		{
			// no special book is requested, we'll show a list of all available books
			$users = $this->model->getUserList();
			include 'view/userlist.php';
		}
		else
		{
			// show the requested book
			$user = $this->model->getUser($_GET['user']);
			include 'view/viewuser.php';
		}
	}

	public function login()
	{
      $error = " ";
      $title = 'Login here';
			include 'view/login.php';
	}
  	public function login_process()
	{
      $title = 'Login  process';
      $error = " ";
      if(!empty($_POST['username']) && !empty($_POST['password']))
      {
        $error = "Welcome ";
        $username= $_POST['username'];
        include 'view/login_process.php';
      }
      else 
      {
      $error = "Some Technical Problem";
      include 'view/login.php';
      }
	}
  
}

?>