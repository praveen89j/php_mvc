<?php

class User {
	public $name;
	public $email_id;
	public $profile;
	
	public function __construct($name, $email_id, $profile)  
    {  
      $this->name = $name;
	    $this->email_id = $email_id;
	    $this->profile = $profile;
    } 
}

?>