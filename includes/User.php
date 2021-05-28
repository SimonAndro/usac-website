<?php

class User {

	public $id;
	public $name;
	public $email;
	public $gender;
	public $password;
	public $created_at;
	public $profilePicture = [];

	public function __construct() {
		
	}

	public function getUserId(){
		return $this->id;
	}

	public function getName(){
		return $this->name;
	}

	public function getCreatedAt()
	{
		return $this->created_at;
	}

	public function getProfilePicture(){

	}

	public function isAdmin($permission) {
		return $this->permissions & $permission;  
	}
}