<?php

class User {

	public $id;
	public $email;
	public $password;
	public $name;
	public $name_last;
	public $university;
	public $grad_date;
	public $date_birth;
	public $studentCard;
	public $validation_key;
	public $gender;
	public $role;

	public $created_at;
	public $email_ok;


	public function __construct() {
		
	}

	public function getUserId(){
		return $this->id;
	}
	
	public function getEmail(){
		return $this->email;
	}

	public function getPassword(){
		return $this->password;
	}

	public function getName(){
		return $this->name;
	}

	public function getFirstName(){
		return $this->name;
	}

	public function getLastName(){
		return $this->name_last;
	}

	public function getUniversity(){
		return $this->university;
	}

	public function getGraduationDate(){
		return $this->grad_date;
	}

	public function getBirthDate(){
		return $this->date_birth;
	}

	public function getStudentCard(){
		return $this->studentCard;
	}

	public function getGender(){
		return $this->gender;
	}

	public function isEmailOk(){
		return $this->email_ok;
	}

	public function getCreatedAt()
	{
		return $this->created_at;
	}

	public function getValidationKey()
	{
		return $this->validation_key;
	}

	public function getRole()
	{
		return $this->role?"Adminstrator":"Normal User";
	}

	public function isAdmin() {
		return $this->role;  
	}
}