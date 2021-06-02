<?php

class User {

	public $id;
	public $email;
	public $name;
	public $university;
	public $gender;
	public $password;
	public $created_at;
	public $email_ok;


	public function __construct() {
		
	}

	public function getUserId(){
		return $this->id;
	}

	public function getPassword(){
		return $this->password;
	}

	public function getName(){
		return $this->name;
	}

	public function getEmail(){
		return $this->email;
	}

	public function isEmailOk(){
		return $this->email_ok;
	}

	public function getCreatedAt()
	{
		return $this->created_at;
	}

	public function isAdmin($permission) {
		return $this->permissions & $permission;  
	}
}