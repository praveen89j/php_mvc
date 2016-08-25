<a href="index.php">Book List</a>  |  <a href="get_user_list.php">User List</a>  |  <a href="login.php">Login</a>
<?php 
	include_once("controller/Controller.php");

	$controller = new Controller();
	$controller->get_user_list();

?>